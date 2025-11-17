<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class ProjetController extends Controller
{
    public function index(): JsonResponse
    {
        // VERSION TEST - Données factices
        $projets = [
            [
                'id' => 1,
                'titre' => 'TEST - Application Mobile Flutter',
                'description' => 'Ceci est un test de l\'API projets',
                'technologies' => ['Flutter', 'Laravel', 'Docker'],
                'categorie' => 'mobile',
                'image' => '/images/test.jpg'
            ],
            [
                'id' => 2, 
                'titre' => 'TEST - Site E-commerce',
                'description' => 'Deuxième projet test',
                'technologies' => ['WordPress', 'PHP', 'MySQL'],
                'categorie' => 'web',
                'image' => '/images/test2.jpg'
            ]
        ];

        return response()->json([
            'success' => true,
            'message' => 'Projets chargés avec succès',
            'count' => count($projets),
            'projets' => $projets
        ]);
    }

    public function show($id): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => 'Détails du projet ' . $id,
            'projet' => [
                'id' => $id,
                'titre' => 'Projet Test ' . $id,
                'description' => 'Description détaillée du projet test'
            ]
        ]);
    }
}