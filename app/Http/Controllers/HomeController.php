<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchCityFormRequest;
use App\Models\Property;

class HomeController extends Controller
{
    public function index(SearchCityFormRequest $request)
    {

        $input = "";
       
        $query = Property::query();
        if ($request->has('title')) {
            $title = $request->input('title');

            $query->where('title', 'like', "%{$title}%");
        }

        $input = $request->validated('title');

        $properties = $query->orderBy("updated_at", "desc")->limit(9)->get();
        return view("home", compact("properties", "input"));
    }
}
