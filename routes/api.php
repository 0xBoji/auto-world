<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AutoworldCRUDController;

Route::post('/cars', [AutoworldCRUDController::class, 'store']);
Route::get('/cars', [AutoworldCRUDController::class, 'index']);
Route::get('/cars/{id}', [AutoworldCRUDController::class, 'show']);
Route::put('/cars/{id}', [AutoworldCRUDController::class, 'update']);
Route::delete('/cars/{id}', [AutoworldCRUDController::class, 'destroy']);


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
