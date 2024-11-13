<?php

namespace App\Http\Controllers;

use App\Models\Rendez_vous;
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
  
    public function Medecin(){
         $users = User::paginate(10); 
        return view('medecins.listeM', compact('users'));
    }
    public function AdminEspace(){
        $users = User::paginate(10);
        $appointments = Rendez_vous::paginate(10); 
        return view('admin.AdminEspace', compact('users', 'appointments'));
    }

    

   
   
}
