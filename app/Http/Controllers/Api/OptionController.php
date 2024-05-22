<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OptionRessource;
use App\Models\Option;
use Exception;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $options = Option::all();
            return response()->json([
                'status' => 200,
                'Message' => 'La liste des options',
                'items' => OptionRessource::collection($options),
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 500,
                'Message' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $option = Option::create([
                'name' => $request->name,
            ]);

            return response()->json([

                'status' => 200,
                'Message' => 'Option ajouté avec succès',
                'items' => new OptionRessource($option),
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 500,
                'Message' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Option $option)
    {
        try {

            return response()->json([
                'status' => 200,
                'Message' => 'option récupérée avec succès',
                'items' => new OptionRessource($option),
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 500,
                'Message' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Option $option)
    {
        try {
            // dd($request);
            $option = $option->update($request->validated());

            return response()->json([
                'status' => 200,
                'Message' => 'Option modifié avec succès',
                'items' => new OptionRessource($option),
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 500,
                'Message' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Option $option)
    {
        try {
            $option->delete();
            return response()->json([
                'status' => 200,
                'Message' => 'option supprimée avec succès',
                // 'items' => new OptionRessource($option),
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => 500,
                'Message' => $e->getMessage(),
            ]);
        }
    }
}
