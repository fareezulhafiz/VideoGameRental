<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RentalController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('users', UserController::class);
Route::resource('rentals', RentalController::class);
Route::resource('games', GameController::class);