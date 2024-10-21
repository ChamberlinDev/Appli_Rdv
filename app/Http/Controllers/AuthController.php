<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
      //
      public function registreView(){
        return view('auth.registre');
    }
    public function loginView(){
        return view('auth.login');
    }

    public function registre(Request $request){
        $user = $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'telephone'=>'required|integer|min:9',
            'role'=>'required',
            'email'=> 'required',
            'password'=>'required|string|min:7'
        ]);
        $user['password']=Hash::make($request->password);
        User:: create($user);
        return redirect()->route('loginView')->with('success', 'Inscription reussite! Connectez-vous msintenant');


    }

    public function login(Request $request){

        $dat = [
            'email'=>  $request->email,
            'password'=> $request->password,
        ];
        if (Auth::attempt($dat)) {
            $user = Auth::user(); // Récupère l'utilisateur authentifié
    
            if ($user->role === 'patient') {
                return redirect()->route('accueilP'); 
            } else {
                if($user->role==='admin'){
                return redirect()->route('accueilAd'); 
                }else{
                    return redirect()->route('accueilM');
                
                }

            }
        
    }
}

       

    
          
        
    

    public function logoutUser(){

        Auth::logout();
        return redirect()->route('main');

    }

}


