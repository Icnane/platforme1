<?php 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Utilisater;

 function register(Request $request)
{
    
    $request->validate([
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:utilisater,email',
        'sexe' => 'required|string',
        'password' => 'required|string|min:8|confirmed', 
    ]);

   
    Utilisater::create([
        'nom' => $request->input('nom'),
        'prenom' => $request->input('prenom'),
        'email' => $request->input('email'),
        'sexe' => $request->input('sexe'),
        'password' => Hash::make($request->input('password')),
    ]);

   
    return redirect()->route('formation')->with('success', 'Compte créé avec succès.');
}

