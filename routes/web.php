<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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
    return view('auth.welcome');
});

Route::resource('compania', 'App\Http\Controllers\CompaniaController');
Route::resource('Actor','App\Http\Controllers\ActorController');
Route::resource('pelicula', 'App\Http\Controllers\PeliculaController');
Route::resource('AP', 'App\Http\Controllers\actorPeliController');
Route::resource('DP', 'App\Http\Controllers\directorPeliController');
Route::resource('GP', 'App\Http\Controllers\generoPeliController');
Route::resource('Director', 'App\Http\Controllers\directorController');
Route::resource('Genero', 'App\Http\Controllers\generoController');

Route::get('/auth/registra', function () {
    return view('registra'); 
});

Route::get('/auth/welcome',[MainController::class,'login'])->name('auth.welcome');
Route::get('/auth/registra',[MainController::class,'register'])->name('auth.registra');
Route::POST('/auth/save',[MainController::class,'save'])->name('auth.save');
Route::POST('/auth/check',[MainController::class,'check'])->name('auth.check');
Route::get('/auth/logout',[MainController::class,'logout'])->name('auth.logout');

Route::get('/layouts/dashboard',[MainController::class,'dashboard']);
Route::get('/layouts/perfil',[MainController::class,'perfil']);
Route::get('/Actor/index',[MainController::class,'actor']);



