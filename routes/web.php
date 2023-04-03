<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[EcommerceController::class,'index'])->name('/');
Route::get('/detials-product/{id}',[EcommerceController::class,'detailsProduct'])->name('details.product');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');
    Route::get('/manage-user',[AdminController::class,'manageUser'])->name('manage.user');
    Route::get('/edit-user/{id}',[AdminController::class,'editUser'])->name('edit.user');
    Route::post('/update-user',[AdminController::class,'updateUser'])->name('update.user');

    Route::get('/add-product',[ProductController::class,'index'])->name('add.product');
    Route::post('/new-product',[ProductController::class,'saveProduct'])->name('new.product');
    Route::get('/manage-Product',[ProductController::class,'manageProduct'])->name('manage.product');
    Route::get('/edit-product/{id}',[ProductController::class,'editProduct'])->name('edit.product');
    Route::post('/update-product',[ProductController::class,'updateProduct'])->name('update.product');
    Route::get('/status-product/{id}',[ProductController::class,'statusProduct'])->name('status.product');
    Route::post('/delete-product',[ProductController::class,'deleteProduct'])->name('delete.product');
});
