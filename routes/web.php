<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::middleware(['splade'])->group(function () {
    Route::resource('users', UserController::class);
    Route::get('/', fn () => view('home'))->name('home');
    Route::get('/demo', fn () => view('demo'))->name('demo');
    Route::get('/api/quote', function () {
        return ['cool'];
        return response()->json([
            'items' => 'foo'
        ]);
    });
    Route::get('/docs', fn () => view('docs'))->name('docs');
});
