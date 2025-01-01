<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\MateriController;
use App\Http\Controllers\Admin\ModulController;
use App\Http\Controllers\Admin\ProfilController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\User\HomeController;
use App\Models\Blog;
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

Route::get('/login',[LoginController::class,'index'])->name('login');
    Route::middleware('auth')->group(function(){
    Route::get('/profil',[ProfilController::class,'index']);
    Route::get('/about',[AboutController::class,'index']);
    Route::get('/kategori',[KategoriController::class,'index']);
    Route::get('/create_kategori',[KategoriController::class,'create_kategori']);
    Route::get('/modul',[ModulController::class,'index']);
    Route::get('/create_modul',[ModulController::class,'create_modul']);
    Route::post('/save_modul',[ModulController::class,'save_modul']);
    Route::get('/materi',[MateriController::class,'index']);
    Route::get('/create_materi',[MateriController::class,'create_materi']);
    Route::get('/',[HomeController::class,'index']);
    Route::get('/kelas',[HomeController::class,'kelas']);
    Route::get('/edit_modul/{id}',[ModulController::class,'edit_modul']);
    Route::put('update_modul',[ModulController::class,'update_modul']);
    Route::delete('delete_modul/{id}',[ModulController::class,'delete_modul']);
    Route::post('save_materi',[MateriController::class,'save_materi']);
    Route::delete('delete_materi/{id}',[MateriController::class,'delete_materi']);
    Route::get('blog',[BlogController::class,'index']);
    Route::get('create_blog',[BlogController::class,'create']);
    Route::post('save_blog',[BlogController::class,'save']);
    Route::get('edit_blog/{id}', [BlogController::class, 'edit']);
    Route::post('update_blog/{id}', [BlogController::class, 'update']);
    Route::delete('delete_blog/{id}',[BlogController::class, 'delete_blog']);
    Route::get('edit_materi/{id}',[MateriController::class,'edit']);
    Route::post('update_materi/{id}', [MateriController::class, 'update'])->name('update_materi');
    Route::post('save_profil',[ProfilController::class,'save_profil']);
    Route::post('save_kategori',[KategoriController::class,'save_kategori']);
    Route::delete('delete_kategori/{id}',[KategoriController::class,'delete']);
    Route::post('updateAbout',[AboutController::class,'update']);
    Route::get('dashboard',[UserController::class,'index']);
    Route::get('create_admin',[UserController::class,'create_admin']);
    Route::post('save_admin',[UserController::class,'save_admin']);
    Route::get('/edit_blog/{id}', [BlogController::class, 'edit_blog']); 
    Route::put('/update_blog/{id}', [BlogController::class, 'update_blog']); 
    Route::get('/admin',[UserController::class,'admin']);
    Route::get('/logout',[LoginController::class,'logout']);
    Route::get('edit_admin/{id}', [UserController::class, 'edit_admin'])->name('admin.edit');
    Route::put('update_admin/{id}', [UserController::class, 'update_admin'])->name('admin.update');
    Route::delete('delete_admin/{id}',[UserController::class,'delete_admin']);
});

Route::get('v_about',[HomeController::class,'about']);
Route::get('v_blog',[HomeController::class,'blog']);
Route::get('v_kelas',[HomeController::class,'kelas']);
Route::post('aksi_login',[LoginController::class,'aksi_login']);
