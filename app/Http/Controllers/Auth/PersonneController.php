<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\Personne;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PersonneController extends Controller
{
    public function showRegistrationForm()
    {
        return view('admin.inscription');
    }
    public function showLoginForm()
    {
        return view('admin.connexion');
    }


    public function registerA(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255|unique:personnes',
            'email' => 'required|email|max:255|unique:personnes',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->route('registerAd')
                ->withErrors($validator)
                ->withInput();
        }

        // Créer l'utilisateur
        $personne = Personne::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Authentifier l'utilisateur
        Auth::login($personne); // Cela devrait maintenant fonctionner sans erreur

        return redirect()->route('loginView'); // Red
}
public function loginA(Request $request)
{
    $credentials = $request->only('username', 'password'); // Récupérer les identifiants envoyés via POST

    // Valider les informations d'identification
    $validator = Validator::make($credentials, [
        'username' => 'required|string|max:255',
        'password' => 'required|string|min:8',
    ]);

    if ($validator->fails()) {
        return redirect()->route('loginAd')
            ->withErrors($validator)
            ->withInput();
    }

    // Vérifier les identifiants de l'utilisateur en utilisant 'username' au lieu de 'email'
    $personne = Personne::where('username', $credentials['username'])->first();

    if ($personne && Hash::check($credentials['password'], $personne->password)) {
        Auth::login($personne); // Connecter l'utilisateur
        return redirect()->route('AdminEspace'); // Rediriger si la connexion réussit
    } else {
        return redirect()->route('loginAd')
            ->withErrors(['username' => 'Identifiants incorrects'])
            ->withInput(); // Afficher l'erreur si la connexion échoue
    }
}

    // Gère la déconnexion
    public function logoutA()
    {
        Auth::logout();
        return redirect()->route('loginAd');
    }
}
