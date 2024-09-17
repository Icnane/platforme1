<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Méthode pour gérer la connexion
    public function login(Request $request)
    {
        // Validation des champs
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Vérification des informations d'identification
        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Connexion réussie, redirection vers la page d'accueil
            auth()->login($user);
            return redirect()->route('home');  // Remplace 'home' par ta route d'accueil
        } else {
            // Échec de la connexion, retour avec un message d'erreur
            return back()->withErrors(['email' => 'Identifiants incorrects.']);
        }
    }

    // Méthode pour gérer l'inscription
    public function register(Request $request)
    {
        // Validation des champs
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'sexe' => 'required|string',
            'password' => 'required|string|confirmed|min:6',
        ]);

        // Création de l'utilisateur
        $user = User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'sexe' => $request->sexe,
            'password' => Hash::make($request->password),
        ]);

        // Connexion automatique après inscription
        auth()->login($user);

        // Redirection vers la page d'accueil
        return redirect()->route('home');  // Remplace 'home' par ta route d'accueil
    }
}
