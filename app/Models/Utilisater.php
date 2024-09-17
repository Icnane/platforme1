<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisater extends Model
{
    use HasFactory;

    // Définir la table associée au modèle
    protected $table = 'utilisater';

    // Champs autorisés pour l'insertion en masse
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'sexe',
        'password',
    ];

    // Cacher les champs sensibles lors de la conversion en tableau ou JSON
    protected $hidden = [
        'password',
    ];

    // Si nécessaire, définir les attributs de type date ou timestamp
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}