<?php

namespace App\Http\Controllers;

use App\Mail\RefusRdvMail;
use App\Mail\AcceptRdvMail;
use App\Mail\ReportRdvMail;
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
            'email' => $rdv ? $rdv->email : null,
            'nom_etablissement' => $rdv ? $rdv->nom_etablissement : null 
        ]);
    }
   
    public function valider_rdv(Request $request)
    {
        // Validation des données du formulaire
        $rdv = $request->validate([
            'nom_patient' => 'required|string|max:255',
            'telephone' => 'required|string|max:9',
            'date' => 'required|date',
            'heure' => 'required|date_format:H:i|',
            'nom_medecin' => 'required|string|max:255',
            'specialite' => 'required|string|max:255',
            'email_patient' => 'required|email',
            'email_medecin' => 'required|email',
            'nom_etablissement' => 'required|string',
        ]);
    
        Rendez_Vous::create($rdv);
    
        // Envoyer l'email au médecin
        Mail::to($rdv['email_medecin'])->send(new SendMail($rdv));
    
        return redirect()->route('welcome')->with('success', 'Rendez-vous pris avec succès !');
    }
     // Méthode pour accepter un rendez-vous
     public function accepterRdv($id)
     {
         $rdv = Rendez_vous::find($id);
         if ($rdv) {
             $rdv->statut = 'accepté';
             $rdv->save();
 
             // Envoi de l'email au patient pour confirmer l'acceptation
             Mail::to($rdv->email_patient)->send(new AcceptRdvMail($rdv));
 
             return redirect()->route('dashboard')->with('success', 'Rendez-vous accepté !');
         }
 
         return redirect()->route('dashboard')->with('error', 'Rendez-vous non trouvé.');
     }
 
     // Méthode pour refuser un rendez-vous
     public function refuserRdv(Request $request, $id)
     {
         $rdv = Rendez_vous::find($id);
         if ($rdv) {
             $rdv->statut = 'refusé';
             $rdv->email_patient = $request->email_patient;  
             $rdv->raison_refus = $request->raison_refus;
             $rdv->save();
 
             // Envoyer un email de refus au patient
             Mail::to($rdv->email_patient)->send(new RefusRdvMail($rdv));
 
             return redirect()->route('dashboard')->with('error', 'Rendez-vous refusé.');
         }
 
         return redirect()->route('dashboard')->with('error', 'Rendez-vous non trouvé.');
     }
     // reporter un rdv
     public function reporter(Request $request, $id)
{
    $rdv = Rendez_vous::findOrFail($id);

    // Mise à jour de la date et de l'heure
    $rdv->date_report= $request->date_report;
    $rdv->heure_report = $request->heure_report;
    $rdv->statut = 'reporté';
    $rdv->save();

    // Envoi de l'email au patient
    Mail::to($rdv->email_patient)->send(new ReportRdvMail($rdv));

    return redirect()->back()->with('success', 'Le rendez-vous a été reporté avec succès.');
}
   
    public function indexMedecin()
    {
        // Vérifie si l'utilisateur est connecté avant d'accéder à l'instance Auth::user()
        $user = Auth::user();

        // Récupère les rendez-vous qui correspondent au médecin connecté
        $appointments = Rendez_vous::where('email_medecin', $user->email)->get();
        return view('dashboard',  compact('appointments', 'user'));
        
    }
   
  

}
