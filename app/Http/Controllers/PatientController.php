<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Rendez_vous;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class PatientController extends Controller
{
    public function rdv($id, $name, $specialite)
    {
        return view('rendez-vous.rdv', compact('id', 'name', 'specialite'));
    }
    
   
    public function valider_rdv(Request $request)
    {
       $rdv= $request->validate([
            'nom_patient' => 'required|string|max:255',
            'telephone' => 'required|string|max:15',
            'date' => 'required|date',
            'heure' => 'required|date_format:H:i',
            'nom_medecin' => 'required|string|max:255',
            'specialite' => 'required|string|max:255',
        ]);
    
        Rendez_Vous::create($rdv);
      
        return redirect()->route('welcome')->with('success', 'Rendez-vous pris avec succès !');
    }
   
    public function indexMedecin()
    {
        // Vérifie si l'utilisateur est connecté avant d'accéder à l'instance Auth::user()
        $user = Auth::user();

        // Récupère les rendez-vous qui correspondent au médecin connecté
        $appointments = Rendez_vous::where('nom_medecin', $user->name)->get();

        // Passe les rendez-vous et le nom du médecin à la vue
        return view('dashboard', compact('appointments', 'user'));
    }
    public function sendmail(Request $request){
        $request-> validate([
            'nom_patient'=>'required',
            'telephone'=>'required',
            'email'=>'required',
            'nom_medecin'=>'required',
            'specialite'=>'required'
        ]);
        $rdv= new Rendez_vous();
        $rdv->nom_patient =$request->nom_patient;
        $rdv->telephone = $request->telephone;
        $rdv->email = $request->email;
        $rdv->nom_medecin = $request->nom_medecin;
        $rdv->specialite = $request->specialite;

        $rdv->save();
        if($rdv){
            $rdv->notify(new Sendmail());
        }
       return redirect('/')->with('status','envoi reussi!!');

    }

}
