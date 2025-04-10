<?php

use App\Http\Controllers\VoitureController;
use Illuminate\Support\Facades\Route;


Route::get('home', function () {
    return view('welcome');
});

Route::get('liste', [VoitureController::class, 'index']);
Route::get('index', [VoitureController::class, 'create']);
Route::get('detail', [VoitureController::class, 'show']);
