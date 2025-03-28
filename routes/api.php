<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/games', [GameController::class, 'index']);
Route::get('/games/{id}', [GameController::class, 'show'])->where('id', '[0-9]+');
