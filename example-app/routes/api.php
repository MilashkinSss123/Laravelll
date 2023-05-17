<?php

use App\Http\Controllers\Api\SubcatController;
use App\Http\Controllers\Api\DishController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\CatController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources([
    'cats' => CatController::class
]);

Route::apiResources([
    'subcats' => SubcatController::class
]);

//Route::apiResources([
//    'favourite' => DishController::class
//]);
