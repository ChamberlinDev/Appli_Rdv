<?php

namespace App\Http\Controllers;


use App\Models\User; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class AuthController extends Controller
{
    //
    public function registreView(){
        return view('auth.registre');
    }

    public function registre(Request $request){
        $user=$request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'role'=>'required',
            'telephone'=>'required|integer|min:8',
            'email'=>'required',
            'password'=>'required|string|min:8',
        ]);
        $user['password']=Hash::make($request->password);
        User::create($user);

         return redirect()->route('loginView')->with('success', 'inscription reussite! Connectez-vous maintenant');

    }

    public function loginView(){
        return view('auth.login');
    }


    public function login(Request $request){

        $dat = [
            'email'=>  $request->email,
            'password'=> $request->password,
        ];
        if (Auth::attempt($dat)) {
            $user = Auth::user(); // Récupère l'utilisateur authentifié
    
            if ($user->role === 'medecin') {
                return redirect()->route('accueilM'); 
          
    
        } else {
            return redirect()->back()->with('error', 'Mot de passe ou email incorrect');
        }
        
    }
    }

    public function logoutUser(){

        Auth::logout();

        return redirect()->route('main');

    }

}

