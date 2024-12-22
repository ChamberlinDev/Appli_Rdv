<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\PersonneController;
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

Route::get('registerAd', [PersonneController::class, 'showRegistrationForm'])->name('registerView');
Route::post('registerAdmin', [PersonneController::class, 'registerA'])->name('registerAdmin');
Route::get('loginAd', [PersonneController::class, 'showLoginForm'])->name('loginView');
Route::post('loginAdmin', [PersonneController::class, 'loginA'])->name('loginAdmin');
Route::post('logoutad', [PersonneController::class, 'logoutA'])->name('logoutA');

Route::get('AdminEspace', [AccueilController::class,'AdminEspace'])->name('AdminEspace');
Route::get('/admin/delete/{id}', [AccueilController::class, 'deleteUser'])->name('admin.delete');
Route::post('/ajoutMed', [RegisteredUserController::class, 'ajoutMed'])->name('ajoutmed');
Route:: get('/indexAjoutMed', [RegisteredUserController::class, 'ajoutm'])->name('ajoutm');


// Route pour accepter un rendez-vous
Route::get('/rdv/accepter/{id}', [PatientController::class, 'accepterRdv'])->name('accepter.rdv');
// Route pour refuser un rendez-vous
Route::post('/rdv/refuser/{id}', [PatientController::class, 'refuserRdv'])->name('refuser.rdv');
//reporter un rdv
Route::post('/rdv/reporter/{id}', [PatientController::class, 'reporter'])->name('reporter.rdv');


