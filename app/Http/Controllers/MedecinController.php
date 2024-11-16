<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MedecinController extends Controller
{
    // fonction recherche d une specialité
    public function search(Request $request)
{
    $specialite = $request->input('specialite');

    if ($specialite) {
        $users = User::where('specialite', 'LIKE', "%$specialite%")->paginate(10);
        
        if ($users->isEmpty()) {
            session()->flash('message', 'Aucun médecin trouvé pour cette spécialité.');
        }
    } else {
        $users = User::paginate(10);
    }

    return view('medecins.search', compact('users', 'specialite'));
}

    public function show($id)
{
    $users = User::findOrFail($id);
    return view('medecins.profile', compact('users'));
}



}
