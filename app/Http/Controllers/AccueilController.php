<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function index(){
        $users= User::paginate(25);
        return view('welcome', compact('users'));
    }
//     public function compteur()
// {
   
//     $users = User::count();

//     return view('welcome', compact('users'));
// }
  
    public function indexMedecin(){
        // $users = User::paginate(10); 
        return view('accueilM');
    }
   
   
   
}
