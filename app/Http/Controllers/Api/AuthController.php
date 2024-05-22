<?php

namespace App\Http\Controllers\APi;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(UserRegisterRequest $request)
    {

        try {
            $user = User::create($request->validated());
            return response()->json([
                'Status' => 200,
                'Message' => 'Utilisateur ajouté avec success',
                'data' => $user,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'Message' => $e->getMessage(),
            ]);
        }
    }

    public function login(UserLoginRequest $request)
    {

        try {
            $credentials = $request->validated();

            if (Auth::attempt($credentials)) {

                $user = auth()->user();

                $token = $user->createToken('Mrok86uYK50h3DhaGuP0fmldt238dtdqg1WuPCRu9e0edffa')->plainTextToken;

                return response()->json([
                    'Status' => 200,
                    'Message' => 'Utilisateur connecté avec success',
                    'Token' => $token,
                    'data' => $user,
                ]);

            } else {

                return response()->json([
                    'Status' => 403,
                    'Message' => 'Utilisateur non trouvé',
                ]);
            }


        } catch (Exception $e) {
            return response()->json([
                'Message' => $e->getMessage(),
            ]);
        }
    }
}
