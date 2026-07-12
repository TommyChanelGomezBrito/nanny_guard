<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CameraController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::resource('cameras', CameraController::class);
    Route::view('/families', 'families')->name('families');
    Route::view('/sitters', 'sitters')->name('sitters');
    Route::view('/schedules', 'schedules')->name('schedules');
    Route::get('/home', function () {
        return redirect()->route('dashboard');
    });
});

Auth::routes();
