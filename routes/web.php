<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\MedecinController;
use App\Http\Controllers\PatientController;

Route::get('/', [AccueilController::class, 'index'])->name('welcome');



Route::get('/registreV',[RegisteredUserController::class, 'store'])->name('registreV');
Route::get('/registre',[AuthenticatedSessionController::class, 'registre'])->name('registre');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', [PatientController::class, 'indexMedecin'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('medecin', [AccueilController::class,'Medecin'])->name('medecin');

Route::get('/prendre-rdv/{id}/{name}/{specialite}', [PatientController::class, 'rdv'])->name('prendre-rdv');
Route::post('/valider-rdv', [PatientController::class, 'valider_rdv'])->name('valider-rdv');


Route::get('/recherche-medecin', [MedecinController::class, 'search'])->name('medecins.search');
Route::get('/medecin/{id}', [MedecinController::class, 'show'])->name('medecin.profile');
