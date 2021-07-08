<?php

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


Route::get('/',[App\Http\Controllers\CrudController::class,'read'])->name('koi');
Route::get('/ninja',[App\Http\Controllers\CrudController::class,'pako'])->name('koirala');

Route::get('/feel',[App\Http\Controllers\CrudController::class,'index'])->name('kk')->middleware('auth');
Route::get('/acer',[App\Http\Controllers\CrudController::class,'read'])->name('apk')->middleware('auth');
Route::get('edit/{id}',[App\Http\Controllers\CrudController::class,'edit'])->name('editpath');
Route::get('update/{id}',[App\Http\Controllers\CrudController::class,'update'])->name('updatepath');
Route::get('delete/{id}',[App\Http\Controllers\CrudController::class,'delete'])->name('deletepath');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
