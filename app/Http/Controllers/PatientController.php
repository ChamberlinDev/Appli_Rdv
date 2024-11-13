<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Rendez_vous;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PatientController extends Controller
{
    public function rdv($id, $name, $specialite)
    {
        $rdv = User::find($id); // Trouver l'utilisateur par son ID
    
        // Passer l'email à la vue
        return view('rendez-vous.rdv', [
            'id' => $id,
            'name' => $name,
            'specialite' => $specialite,
            'email' => $rdv ? $rdv->email : null // Si trouvé, récupérer l'email
        ]);
    }
   
    public function valider_rdv(Request $request)
    {
        // Validation des données du formulaire
        $rdv = $request->validate([
            'nom_patient' => 'required|string|max:255',
            'telephone' => 'required|string|max:15',
            'date' => 'required|date',
            'heure' => 'required|date_format:H:i',
            'nom_medecin' => 'required|string|max:255',
            'specialite' => 'required|string|max:255',
            'email_medecin' => 'required|email',
        ]);
    
        // Créer un rendez-vous dans la base de données
        Rendez_Vous::create($rdv);
    
        // Envoyer l'email au médecin
        Mail::to($rdv['email_medecin'])->send(new SendMail($rdv));
    
        // Rediriger avec un message de succès
        return redirect()->route('welcome')->with('success', 'Rendez-vous pris avec succès !');
    }
   
    public function indexMedecin()
    {
        // Vérifie si l'utilisateur est connecté avant d'accéder à l'instance Auth::user()
        $user = Auth::user();

        // Récupère les rendez-vous qui correspondent au médecin connecté
        $appointments = Rendez_vous::where('email_medecin', $user->email)->get();

        // Passe les rendez-vous et le nom du médecin à la vue
        return view('dashboard', compact('appointments', 'user'));
    }
   

}
