<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\MateriController;
use App\Http\Controllers\Admin\ModulController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/login',[LoginController::class,'index']);
Route::get('/profil',[ProfilController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/kategori',[KategoriController::class,'index']);
Route::get('/create_kategori',[KategoriController::class,'create_kategori']);
Route::get('/modul',[ModulController::class,'index']);
Route::get('/create_modul',[ModulController::class,'create_modul']);
Route::get('/materi',[MateriController::class,'index']);
Route::get('/create_materi',[MateriController::class,'create_materi']);
Route::get('/',[HomeController::class,'index']);
Route::get('/kelas',[HomeController::class,'kelas']);
