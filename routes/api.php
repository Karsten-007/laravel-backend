<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProjetController;
use App\Http\Controllers\Api\CompetenceController;
use App\Http\Controllers\Api\ContactController;

// Route de test
Route::get('/test', function () {
    return response()->json(['message' => 'API Portfolio fonctionne!']);
});

// Routes Projets (SIMPLIFIÉES)
Route::get('/projets', [ProjetController::class, 'index']);
Route::get('/projets/{id}', [ProjetController::class, 'show']);

// Routes Compétences (SIMPLIFIÉES)  
Route::get('/competences', [CompetenceController::class, 'index']);
Route::get('/competences/{categorie}', [CompetenceController::class, 'byCategory']);

// Route Contact
Route::post('/contact', [ContactController::class, 'store']);