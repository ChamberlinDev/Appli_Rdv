<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MedecinController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth']], function () {
    Route::get('accueilP', [AccueilController::class, 'indexPatient'])->name('accueilP');
    Route::get('accueilM', [AccueilController::class, 'indexMedecin'])->name('accueilM');
    Route::get('accueilAd', [AccueilController::class, 'indexAdmin'])->name('accueilAd');
    Route::get('/logout-user', [AuthController::class, 'logoutUser'])->name('logoutUser');
});

// Routes authen....
Route::get('/', [AccueilController::class, 'index'])->name('main');
Route::get('/registre', [AuthController::class, 'registreView'])->name('registreView');
Route::get('/login', [AuthController::class, 'loginView'])->name('loginView');

// Traitement authentification
Route::post('/registre_save', [AuthController::class, 'registre'])->name('registre_save');
Route::post('/login_save', [AuthController::class, 'login'])->name('login_save');

Route::get('/ajouter', [MedecinController::class, 'create'])->name('ajouter');