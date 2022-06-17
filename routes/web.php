<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [HomeController::class, 'index'])->middleware('auth');
Route::view('/admin', 'admin.index', ['title' => 'Admin'])->middleware('admin');
Route::view('/users', 'users.index', ['title' => 'Profil Pengguna'])->middleware('auth');
Route::view('/notes', 'notes.index', ['title' => 'Catatan'])->middleware('auth');
Route::view('/notes/create', 'notes.create', ['title' => 'Tambah'])->middleware('auth');
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login')->middleware('guest');
    Route::post('/login', 'authenticate')->middleware('guest');
    Route::post('/logout', 'logout')->middleware('auth');
});
Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'index')->middleware('guest');
    Route::post('/register', 'store')->middleware('guest');
});
