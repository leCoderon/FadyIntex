<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserRegisterRequest extends FormRequest
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
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:3'],
        ];
    }

    
    public function messages(): array
    {
        return [
            'name.required' => 'Le nom est requis',
            'name.min' => 'Le nom doit faire au moins 3 caractère',
            'email.required' => 'Le email est requis',
            'email.unique' => 'Le email exite déjà',
            'password.required' => 'Le mot de passe est requis',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            "status" => 200,
            "success" => false,
            "error" => true,
            "Message" => "Erreur de validation",
            "errorList" => $validator->errors(),
        ]));
    }
}
