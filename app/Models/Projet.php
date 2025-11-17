<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description', 
        'image',
        'technologies',
        'lien_github',
        'lien_demo',
        'categorie',
        'ordre_affichage',
        'en_avant'
    ];

    protected $casts = [
        'technologies' => 'array',
        'en_avant' => 'boolean'
    ];
}