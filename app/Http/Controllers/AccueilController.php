<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function index(){
        return view('main');
    }
    public function indexPatient(){
        return view('accueilP');

    }
    public function indexMedecin(){
        $users = User::paginate(10); 
        return view('accueilM', compact('users'));
    }
    public function indexAdmin(){
        $users = User::where('role', 'medecin')->paginate(10); 
        return view('accueilAd', compact('users'));
    }
}
