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

Route::get('login', [\App\Http\Controllers\LoginController::class, 'index']);
Route::post('actionLogin', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('actionLogin');
Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);
Route::resource('category', \App\Http\Controllers\CategoryController::class);


//memanggil function tambah di Controller, url (http://127.0.0.1:8000/nama_function)
Route::resource('belajar', \App\Http\Controllers\BelajarController::class);
Route::resource('user', \App\Http\Controllers\UserController::class);
Route::get('tambah', [\App\Http\Controllers\BelajarController::class, 'tambah']);
Route::post('store_tambah', [\App\Http\Controllers\BelajarController::class, 'storeTambah'])->name('store_tambah');
Route::get('kurang', [\App\Http\Controllers\BelajarController::class, 'kurang']);
Route::post('store_kurang', [\App\Http\Controllers\BelajarController::class, 'storekurang'])->name('store_kurang');
Route::get('kali', [\App\Http\Controllers\BelajarController::class, 'kali']);
Route::post('store_kali', [\App\Http\Controllers\BelajarController::class, 'storekali'])->name('store_kali');
Route::get('bagi', [\App\Http\Controllers\BelajarController::class, 'bagi']);
Route::post('store_bagi', [\App\Http\Controllers\BelajarController::class, 'storebagi'])->name('store_bagi');
// Route::get('delete/{id}')

Route::get('/', function () {
    return view('welcome');
});
