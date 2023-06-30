<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutoworldCRUD;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use App\Http\Controllers\CarListController;
use App\Http\Controllers\ContactCRUDController;
use App\Http\Controllers\CompareCarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/test', function () {
    return view('test');
});
Route::get('/homepage', function () {
    return view('homepage.index');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/', function () {
    return view('homepage.index');
});
Route::get('/car', function () {
    return view('homepage.car');
});
Route::get('/about', function () {
    return view('homepage.about');
});
Route::get('/contact', function () {
    return view('homepage.contact');
});

    
Route::post('/cars', [AutoworldCRUD::class, 'store'])->name('cars.store');

// Route::group(['middleware' => ['web', 'auth']], function () {
//     // Các route được bảo vệ bởi middleware 'auth' ở đây
//     Route::get('/car-list', [CarListController::class, 'index'])
//         ->name('car-list');
// });

Route::get('/admin/car-list', [CarListController::class, 'index'])->name('car-list');




Route::get('/admin/car/create', [AutoworldCRUD::class, 'create'])->name('car.create');
Route::post('/car', [AutoworldCRUD::class, 'store'])->name('car.store');


Route::get('/car/{id}/edit', [AutoworldCRUD::class, 'edit'])->name('car.edit');
Route::post('/car/{id}', [AutoworldCRUD::class, 'update'])->name('car.update');


Route::delete('/car/{id}', [AutoworldCRUD::class, 'destroy'])->name('car.delete');


Route::get('/admin/upload', [AutoworldCRUD::class, 'upload']);
Route::post('/admin/upload', [AutoworldCRUD::class, 'doupload']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




//contact
Route::get('/admin/contact', [ContactCRUDController::class, 'index'])->name('contact.index');
Route::get('/admin/contact/create', [ContactCRUDController::class, 'create'])->name('contact.create');
Route::post('/admin/contact', [ContactCRUDController::class, 'store'])->name('contact.store');
Route::get('/admin/contact/{id}/edit', [ContactCRUDController::class, 'edit'])->name('contact.edit');
Route::put('/admin/contact/{id}', [ContactCRUDController::class, 'update'])->name('contact.update');
Route::delete('/admin/contact/{id}', [ContactCRUDController::class, 'destroy'])->name('contact.destroy');




Route::get('/admin/compare', [CompareCarController::class, 'index'])->name('compare_cars.index');
Route::get('/admin/compare/create', [CompareCarController::class, 'create'])->name('compare_cars.create');
Route::post('/admin/compare', [CompareCarController::class, 'store'])->name('compare_cars.store');
Route::get('/admin/compare/{id}/edit', [CompareCarController::class, 'edit'])->name('compare_cars.edit');
Route::put('/admin/compare/{id}', [CompareCarController::class, 'update'])->name('compare_cars.update');
Route::delete('/admin/compare/{id}', [CompareCarController::class, 'destroy'])->name('compare_cars.destroy');
