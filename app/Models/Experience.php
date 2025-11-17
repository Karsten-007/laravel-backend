<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'poste',
        'entreprise',
        'date_debut',
        'date_fin',
        'description',
        'type',
        'lieu'
    ];

    protected $casts = [
        'date_debut' => 'date',
        'date_fin' => 'date'
    ];
}