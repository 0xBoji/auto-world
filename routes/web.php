<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutoworldCRUD;
use App\Http\Controllers\CarListController;
use App\Http\Controllers\ContactCRUDController;
use App\Http\Controllers\CompareCarController;
use App\Http\Controllers\UploadLogoController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\BlogAdminController;
use App\Http\Controllers\BlogCRUDController;

use Illuminate\Support\Facades\DB;





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


Route::get('/', [HomepageController::class, 'index'])->name('homepage');
Route::get('/car', [HomepageController::class, 'car']);
Route::get('/compare', [HomepageController::class, 'compare']);


Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('homepage.about');
});
Route::get('/contact', function () {
    return view('homepage.contact');
});
Route::get('/blog', function () {
    $blogs = DB::table('blog_admins')->get();
    return view('homepage.blog', compact('blogs'));
});
Route::get('/admin/blog', function () {
    $blogs = DB::table('blog_admins')->get();
    return view('blogs.index', compact('blogs'));
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
// routes/web.php
Route::get('/car/{id}', [AutoworldCRUD::class, 'show'])->name('car.show');
Route::delete('/car/{id}', [AutoworldCRUD::class, 'destroy'])->name('car.delete');






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/car/car-detail/{id}', 'App\Http\Controllers\AutoworldCRUD@show')->name('autoworld_CRUDs.show');



//contact
Route::get('/admin/contact', [ContactCRUDController::class, 'index'])->name('contact.index');
Route::get('/admin/contact/create', [ContactCRUDController::class, 'create'])->name('contact.create');
Route::post('/admin/contact', [ContactCRUDController::class, 'store'])->name('contact.store');
Route::get('/admin/contact/{id}/edit', [ContactCRUDController::class, 'edit'])->name('contact.edit');
Route::put('/admin/contact/{id}', [ContactCRUDController::class, 'update'])->name('contact.update');
Route::delete('/admin/contact/{id}', [ContactCRUDController::class, 'destroy'])->name('contact.destroy');

Route::get('/finance', [CompareCarController::class, 'show'])->name('compare_cars.show');

//compare

Route::get('/admin/compare', [CompareCarController::class, 'index'])->name('compare_cars.index');
Route::get('/admin/compare/create', [CompareCarController::class, 'create'])->name('compare_cars.create');
Route::post('/admin/compare', [CompareCarController::class, 'store'])->name('compare_cars.store');
Route::get('/admin/compare/{id}/edit', [CompareCarController::class, 'edit'])->name('compare_cars.edit');
Route::put('/admin/compare/{id}', [CompareCarController::class, 'update'])->name('compare_cars.update');
Route::delete('/admin/compare/{id}', [CompareCarController::class, 'destroy'])->name('compare_cars.destroy');


//logo

Route::get('/admin/upload', [UploadLogoController::class, 'index'])->name('uploadLogos.index');
Route::get('admin/upload/create', [UploadLogoController::class, 'create'])->name('uploadLogos.create');
Route::post('/admin/upload', [UploadLogoController::class, 'store'])->name('uploadLogos.store');
Route::get('/admin/{uploadLogo}', [UploadLogoController::class, 'show'])->name('uploadLogos.show');
Route::get('/admin/{uploadLogo}/edit', [UploadLogoController::class, 'edit'])->name('uploadLogos.edit');
Route::put('/admin/{uploadLogo}', [UploadLogoController::class, 'update'])->name('uploadLogos.update');
Route::delete('/admin/{uploadLogo}', [UploadLogoController::class, 'destroy'])->name('uploadLogos.destroy');


//blog
// routes/web.php
// routes/web.php
// routes/web.php
Route::get('/blog/{id}/detail', 'BlogAdminController@show')->name('blog.detail');
Route::get('/blog/readmore/{id}', [BlogAdminController::class, 'show'])->name('blogcrud.show');


Route::get('/admin/blog', [BlogAdminController::class, 'index'])->name('blogs.index');
Route::get('admin/blog/create', [BlogAdminController::class, 'create'])->name('blogs.create');
Route::post('admin/blog', [BlogAdminController::class, 'store'])->name('blogs.store');
Route::get('admin/blog/{id}/edit', [BlogAdminController::class, 'edit'])->name('blogs.edit');
Route::put('admin/blog/{id}', [BlogAdminController::class, 'update'])->name('blogs.update');
Route::delete('admin/blog/{id}', [BlogAdminController::class, 'destroy'])->name('blogs.destroy');
