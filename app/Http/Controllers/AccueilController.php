<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function index(){
        $users=User::paginate(25);
        return view('welcome', compact('users'));
    }
    // public function indexPatient(){
    //     return view('accueilP');

    // }
    public function indexMedecin(){
        // $users = User::paginate(10); 
        return view('accueilM');
    }
    public function indexAdmin(){
        // $users = User::where('role', 'medecin')->paginate(10); 
        return view('accueilAd');
    }

    public function indexRdv(){
        $users= User::paginate(25);
        return view('rendez-vous.rdv', compact('users'));
    }
    public function rdvView($id){
        $users=User::find($id);
        return view('rendez-vous.rdvp', compact('users'));
        
    }
}
