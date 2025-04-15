<?php

use App\Http\Controllers\PointageController;
use App\Http\Controllers\VoitureController;
use Illuminate\Support\Facades\Route;


Route::get('home', function () {
    return view('welcome');
});

Route::get('voitures', [VoitureController::class, 'index'])->name('voiture.index');
Route::get('voitures/ajout', [VoitureController::class, 'create'])->name('voiture.create');
Route::post('voitures/save', [VoitureController::class, 'store'])->name('voiture.store');


Route::get('affiche', [PointageController::class, 'index'])->name('pointage.index');
Route::get('ajout', [PointageController::class, 'create'])->name('pointage.create');
Route::post('save', [PointageController::class, 'store'])->name('pointage.store');
