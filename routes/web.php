<?php

use App\Http\Controllers\GambarProyekController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\TestimonialController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/proyek', ProyekController::class);
Route::resource('/testimoni', TestimonialController::class);
Route::resource('/gambarProyek', GambarProyekController::class);
