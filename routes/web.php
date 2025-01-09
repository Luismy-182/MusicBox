<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasswordReset;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VerifyEmailController;
use Illuminate\Auth\Notifications\VerifyEmail;
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

Route::get('/', function () {
    return view('welcome');
});

//auth
Route::get('/registro',[RegisterController::class,'index'])->name('register.index');
Route::post('/registro',[RegisterController::class,'store']);

Route::get('/confirmar-cuenta',[VerifyEmailController::class,'index'])->name('verify.email');


Route::get('/login',[LoginController::class,'index'])->name('login.index');
Route::post('/login',[LoginController::class,'store']);

Route::get('/recuperar-password',[PasswordResetController::class,'index'])->name('passwordReset.index');
Route::post('/recuperar-password',[PasswordResetController::class,'store'])->name('passwordReset.store');


//area administrativa 


Route::get('/admin',[AdminController::class,'index'])->name('admin.index');
//crud
Route::get('/admin/crear-artista',[ArtistaController::class,'index'])->name('artista.index');
Route::post('/admin/crear-artista',[ArtistaController::class,'create'])->name('artista.create');
//editar artista
Route::get('/admin/{artista}/editar-artista/',[ArtistaController::class, 'edit'])->name('artista.edit');