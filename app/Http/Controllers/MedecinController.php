<?php

namespace App\Http\Controllers;

use App\Models\Medecin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MedecinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('personnels.ajout');

    }
    public function listeView(){
     $users = User::where('role', 'medecin')->paginate(10); 
    return view('accueilAd', compact('users'));
     }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $user = $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'telephone'=>'required|integer|min:9',
            'role'=>'required',
            'email'=> 'required',
            'password'=>'required|string|min:7'
        ]);
        $user['password']=Hash::make($request->password);
        Medecin:: create($user);
        return redirect()->route('listeView')->with('success', 'Ajout reussi!');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
