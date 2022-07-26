<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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



Route::view('/','dashboard')->name('dashboard');
Route::get('/products',[ProductController::class,'getProduct']);
Route::get('/products/destroy/{id}',[ProductController::class,'destroyProduct']);
Route::post('/products/store',[ProductController::class,'storeProduct']);


require __DIR__.'/auth.php';

Route::view('/any{}','dashboard')->where('any','.*');
