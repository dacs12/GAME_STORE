<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController; 

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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/product', ProductController::class);


Auth::routes();

Route::get('/listproduct', [ProductController::class, 'listproduct'])->name('listadoproductos');
Route::get('/contact/contactar', [ContactController::class, 'contactar'])->name('guardarcontacto');
Route::get('/contact/notification', [ContactController::class, 'guardar'])->name('notificarcontacto');
Route::get('/listcontacts', [ContactController::class, 'listcontact'])->name('listarcontacto');

Route::group(['middleware' => 'auth'], function () {

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/product', ProductController::class);
Route::resource('/category', CategoryController::class);
}); 