<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AutoworldCRUDController;
use App\Http\Controllers\API\CompareCarController;
Route::post('/cars', [AutoworldCRUDController::class, 'store']);
Route::get('/cars', [AutoworldCRUDController::class, 'index']);
Route::get('/cars/{id}', [AutoworldCRUDController::class, 'show']);
Route::put('/cars/{id}', [AutoworldCRUDController::class, 'update']);
Route::delete('/cars/{id}', [AutoworldCRUDController::class, 'destroy']);

Route::get('compare_cars', [CompareCarController::class, 'index']);
Route::post('compare_cars', [CompareCarController::class, 'store']);
Route::get('compare_cars/{id}', [CompareCarController::class, 'show']);
Route::put('compare_cars/{id}', [CompareCarController::class, 'update']);
Route::delete('compare_cars/{id}', [CompareCarController::class, 'destroy']);

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
