<?php

namespace App\Http\Controllers;

use App\Models\Rendez_vous;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function rdv_save(Request $request){
       
            $user=$request->validate([
                'nom'=>'required',
                'date'=>'required',
                'telephone'=>'required|integer|min:8',
                'heure'=>'required',
                'medecin'=>'required',
                'specialite'=>'required',
                
            ]);
            Rendez_vous::create($user);
    
             return redirect()->route('loginView')->with('success', 'inscription reussite! Connectez-vous maintenant');
    
        
    }
}
