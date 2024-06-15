<?php

use App\Http\Controllers\dashboard;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroController;
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

Route::get('/',[LoginController::class,'index'])->name('login.index');
    
Route::get('/home',[LoginController::class,'index'])->name('login.index');


Route::middleware(['guest'])->group(function () {




    Route::get('/',[LoginController::class,'index'])->name('login.index');

Route::get('/home',[LoginController::class,'index'])->name('login.index');

Route::get('/registro',[RegistroController::class,'create'])->name('registro.index');
Route::post('/registro',[RegistroController::class,'store'])->name('registro.store');

Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store'])->name('login.store');
});

// ruta protegida
Route::middleware(['auth'])->group(function () {
    Route::get('/',[dashboard::class,'index'])->name('dashboard');
    Route::get('/home',[dashboard::class,'index'])->name('dashboard');
Route::get('/dashboard',[dashboard::class,'index'])->name('dashboard.salir');
Route::get('/salir',[LoginController::class,'salir'])->name('login.salir');

});

Route::get('/salir',[LoginController::class,'salir'])->name('login.salir');