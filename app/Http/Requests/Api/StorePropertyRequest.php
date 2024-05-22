<?php

namespace App\Http\Requests\Api;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class StorePropertyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
 /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'min:8'],
            'description' => ['required', 'min:8'],
            'price' => ['required', 'integer', 'min:0'],
            'rooms' => ['required', 'integer', 'min:1'],
            'surface' => ['required', 'integer', 'min:2'],
            'bedrooms' => ['required', 'integer', 'min:0'],
            'floor' => ['required', 'integer', 'min:0'],
            'city' => ['required', 'min:8'],
            'postal_code' => ['required', 'min:3'],
            'address' => ['required', 'min:10'],
            'sold' => ['required', 'boolean'],
            'options' => ['required', 'array', 'exists:options,id'],
            'images' => ['required'],
            'images.*' => ['required', 'image', 'mimes:png,jpg,svg,gif,jpeg, webp', 'max:2048'],
        ];
    }


    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response()->json([
            'error' => true,
            'success' => false,
            'message' => 'Erreur de validation',
            'errorsList' => $validator->errors(),
        ]));
    }
}


// {
// 	"title": "maison à vendre",
// 	"description": "cette belle maison à vendre",
// 	"price": "maison à vendre",
// 	"rooms": "maison à vendre",
// 	"surface": "maison à vendre",
// 	"bedrooms": "maison à vendre",
// 	"floor": "maison à vendre",
// 	"city": "maison à vendre",
// 	"postal_code": "maison à vendre",
// 	"address": "maison à vendre",
// 	"sold": "maison à vendre",
// 	"options" : "['testvalue', 'val']",
// 	"images" : "https://via.placeholder.com/604x480.png/0033aa?text=houses+amet"
// }