<?php

use App\Http\Controllers\APi\AuthController;
use App\Http\Controllers\Api\OptionController;
use App\Http\Controllers\Api\PropertyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/




//Insciption d'un Nouvel utiisateur
Route::post('/register', [AuthController::class, 'register']);

//Connexion de l' utiisateur
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    /* xxxxxxxxxxxxxxxxxxxx Gestion des options xxxxxxxxxxxxxxxxxxxx */

    //Afffiche la liste des options
    Route::get("/options", [OptionController::class, 'index']);

    //Récupère une option en particulier
    Route::get("/options/{option}", [OptionController::class, 'show']);

    //Supprime une option en particulier
    Route::delete("/options/{option}", [OptionController::class, 'destroy']);

    //Stocker une option 
    Route::post("/options", [OptionController::class, 'store']);

    //Modifier une option en particulier
    Route::put("/options/{option}", [OptionController::class, 'update']);


    /* xxxxxxxxxxxxxxxxxxxx Gestion des biens xxxxxxxxxxxxxxxxxxxx */
    //Afffiche la liste des biens
    Route::get("/property", [PropertyController::class, 'index']);

    //Récupère un bien en particulier
    Route::get("/property/{property}", [PropertyController::class, 'show']);

    //Stocker un nouveau bien
    Route::post("/property", [PropertyController::class, 'store']);

    //Modifier un bien en particulier
    Route::put("/property/{property}", [PropertyController::class, 'update']);

    //Supprime un bien en particulier
    Route::delete("/property/{property}", [PropertyController::class, 'destroy']);
});
