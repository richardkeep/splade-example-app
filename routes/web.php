<?php

use ProtoneMedia\Splade\Facades\Splade;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UserController;

Route::middleware(['splade'])->group(function () {
    Splade::share('users', User::all());
    Route::resource('users', UserController::class);
    Route::get('/', fn () => view('home'))->name('home');
    Route::get('/demo', fn () => view('demo'))->name('demo');
    Route::get('/docs', fn () => view('docs'))->name('docs');
});