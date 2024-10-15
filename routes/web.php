<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;



Route::get('/',[AccueilController::class,'index'])->name('main');
// routes accueils 
Route::get('accueilP', [AccueilController::class,'indexPatient'])->name('accueilP');
Route::get('accueilM', [AccueilController::class,'indexMedecin'])->name('accueilM');
Route::get('accueilAd',   [AccueilController::class,'indexAdmin'])->name('accueilAd');

//appeller les formulaires
Route::get('/registre',[AuthController::class,'registreView'])->name('registreView');
Route::get('/login',[AuthController::class,'loginView'])->name('loginView');


// Traitement authentification
Route::post('/registre_save',[AuthController::class,'registre'])->name('registre_save');
Route::post('/login_save', [AuthController::class, 'login'])->name('login_save');
// deconnexion
Route::get('/logout-user', [AuthController::class, 'logoutUser'])->name('logoutUser');


