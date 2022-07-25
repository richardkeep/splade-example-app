<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Events\HighServerLoadDetected;

Route::post('/quote', function () {
    return request()->all();
});

Route::post('/fire-event', function () {
    event(new HighServerLoadDetected());
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
