<?php

namespace App\Http\Controllers;

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
        return view('accueilM');
    }
    public function indexAdmin(){
        return view('accueilAd');
    }
}
