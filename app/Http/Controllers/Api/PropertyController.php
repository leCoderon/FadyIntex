<?php

namespace App\Http\Controllers\Api;

use App\Events\StorePropertyEvent;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StorePropertyRequest;
use App\Http\Resources\PropertyRessource;
use App\Models\Image;
use App\Models\property;
use Exception;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {

            $query = Property::query();
            $perPage = 5;

            if ($request->has('search')) {

                $search = $request->input('search');
                $query->where("title", "LIKE", "%$search%");
            }

            $result = $query->with(['options', 'images'])->paginate($perPage);
            // dd($result->lastPage());
            return response()->json([
                'status' => 200,
                'Message' => 'Liste des propriétés disponible',
                'currrentPage' => $result->currentPage(),
                'lastPage' => $result->lastPage(),
                'items' => PropertyRessource::collection($result->items()),
            ]);
        } catch (Exception $e) {
            return response()->json([
                'Message' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePropertyRequest $request)
    {
        try {
            $data = $request->validated();
            $options = $request->options;
            $property  = Property::create($data);
            $property->options()->sync($options);


            $this->imageUpload($request, $property);

            // event(new StorePropertyEvent($property));
            return response()->json([
                'status' => 200,
                'Message' => "Le bien a été ajouté avec succès",
                'data' =>   new PropertyRessource(Property::with(['options', 'images'])->find($property->id)),
            ]);
        } catch (Exception $e) {
            return response()->json([
                'Message' => $e->getMessage(),
            ]);
        }
    }



    /**
     * Store a newly created resource in storage.
     * @param  App\Http\Requests\PropertyFormRequest $request
     * @param  App\Models\Property $property
     */
    protected function imageUpload($request, property $property)
    {
        try {
            if ($request->has('images')) {
                $images = [];
                $uploadedImages = $request->file('images');

                foreach ($uploadedImages as $key => $uploadedImage) {
                    $imageName = time() . rand(1, 99) . '.' . $uploadedImage->extension();
                    $imagePath = $uploadedImage->storeAs('photos', $imageName, 'public');

                    $images[]['name'] = $imagePath;
                }

                foreach ($images as $key => $value) {
                    $image = Image::create($value);
                    $image->property()->associate($property);
                    $image->save();
                }
            }
        } catch (Exception $e) {
            return response()->json([
                'Message' => $e->getMessage()
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(property $property)
    {
        try {
            return response()->json([
                'status' => 200,
                'Message' => "Le bien a été récupéré avec succès",
                'data' =>   new PropertyRessource(Property::with(['options', 'images'])->find($property->id)),
            ]);
        } catch (Exception $e) {
            return response()->json([
                'Message' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePropertyRequest $request, property $property)
    {
        // dd($request);
        try {
            $data = $request->validated();
            $options = $request->options;
            $property  = Property::create($data);
            $property->options()->sync($options);


            $this->imageUpload($request, $property);

            // event(new StorePropertyEvent($property));
            return response()->json([
                'status' => 200,
                'Message' => "Le bien a été ajouté avec succès",
                'data' =>   new PropertyRessource(Property::with(['options', 'images'])->find($property->id)),
            ]);
        } catch (Exception $e) {
            return response()->json([
                'Message' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(property $property)
    {
        try {

            $property->delete();

            return response()->json([
                'status' => 200,
                'Message' => "Le bien a été supprimé avec succès",
            ]);
        } catch (Exception $e) {

            return response()->json([
                'Message' => $e->getMessage(),
            ]);
        }
    }
}
