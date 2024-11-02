<?php

namespace App\Http\Controllers;

use App\Models\Rendez_vous;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function rdv_save(Request $request){
       
            $user=$request->validate([
               'nom_patient' => 'required|string|max:255',
                'telephone' => 'required|string|max:20',
                'date' => 'required|date',
                'heure' => 'required|date_format:H:i',
                'medecin_id' => 'required|exists:users,id',
    ]);
                
            
            Rendez_vous::create($user);
    
             return redirect()->route('loginView')->with('success', 'inscription reussite! Connectez-vous maintenant');
    
        
    }
    public function prdv(){
        
    }
}
