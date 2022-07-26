<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class,'acceuil'])->name('acceuil');
Route::get('post',[HomeController::class,'post'])->name('post');
Route::post('traitement',[HomeController::class,'traitement'])->name('traitement');
Route::post('store_post',[HomeController::class,'store_post'])->name('store_post');


