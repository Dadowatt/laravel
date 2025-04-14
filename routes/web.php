<?php

use App\Http\Controllers\PointageController;
use App\Http\Controllers\VoitureController;
use Illuminate\Support\Facades\Route;


Route::get('home', function () {
    return view('welcome');
});

// Route::get('liste', [VoitureController::class, 'index']);
// Route::get('index', [VoitureController::class, 'create']);
// Route::get('detail', [VoitureController::class, 'show']);

Route::get('liste', [VoitureController::class, 'index'])->name('voiture.index');
Route::get('ajouter', [VoitureController::class, 'create'])->name('voiture.create');
Route::get('detail/{voiture}', [VoitureController::class, 'show'])->name('voiture.show');
Route::post('save', [VoitureController::class, 'store'])->name('voiture.store');


Route::get('affiche', [PointageController::class, 'index'])->name('pointage.index');
Route::get('ajout', [PointageController::class, 'create'])->name('pointage.create');
Route::post('save', [PointageController::class, 'store'])->name('pointage.store');
