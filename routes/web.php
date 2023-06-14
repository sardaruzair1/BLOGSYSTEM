<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return redirect()->route('userpage');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/userpage', [HomeController::class, 'userpage'])->name('userpage');
Route::get('/product', [HomeController::class, 'product'])->name('product');
Route::get('/create_blog', [HomeController::class, 'create_blog'])->name('create_blog');
Route::post('/upload_blog',[HomeController::class,'upload_blog'])->name('upload_blog');
Route::get('/blogdetail/{id}', [HomeController::class, 'blogdetail'])->name('blogdetail');

