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
Route::get('detail/{voiture}', [VoitureController::class, 'show'])->name('voiture.show');
Route::delete('delete/{voiture}', [VoitureController::class, 'destroy'])->name('voiture.destroy');
Route::get('voitures/edit/{voiture}', [VoitureController::class, 'edit'])->name('voiture.edit');
Route::put('voitures/update/{voiture}', [VoitureController::class, 'update'])->name('voiture.update');



Route::get('affiche', [PointageController::class, 'index'])->name('pointage.index');
Route::get('ajout', [PointageController::class, 'create'])->name('pointage.create');
Route::post('save', [PointageController::class, 'store'])->name('pointage.store');
Route::put('update/{pointage}', [PointageController::class, 'update'])->name('pointage.update');
Route::get('pointage/edit/{pointage}', [PointageController::class, 'edit'])->name('pointage.edit');
Route::get('pointage/detail/{pointage}', [PointageController::class, 'show'])->name('pointage.show');
Route::delete('pointage/delete/{pointage}', [PointageController::class, 'destroy'])->name('pointage.destroy');


