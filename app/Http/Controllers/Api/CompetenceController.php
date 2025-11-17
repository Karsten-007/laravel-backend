<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class CompetenceController extends Controller
{
    public function index(): JsonResponse
    {
        // VERSION TEST - Données factices
        $competences = [
            'frontend' => ['HTML5', 'CSS3', 'JavaScript ES6+', 'React', 'Bootstrap'],
            'backend' => ['PHP', 'Laravel', 'Node.js', 'Python'],
            'mobile' => ['Flutter', 'Dart'],
            'bdd' => ['MySQL', 'PostgreSQL', 'Redis'],
            'outils' => ['Git/GitHub', 'Docker', 'Figma']
        ];

        return response()->json([
            'success' => true,
            'message' => 'Compétences chargées avec succès', 
            'competences' => $competences
        ]);
    }

    public function byCategory($categorie): JsonResponse
    {
        $allCompetences = [
            'frontend' => ['HTML5', 'CSS3', 'JavaScript ES6+', 'React', 'Bootstrap'],
            'backend' => ['PHP', 'Laravel', 'Node.js', 'Python'],
            'mobile' => ['Flutter', 'Dart'],
            'bdd' => ['MySQL', 'PostgreSQL', 'Redis'],
            'outils' => ['Git/GitHub', 'Docker', 'Figma']
        ];

        $competences = $allCompetences[$categorie] ?? [];

        return response()->json([
            'success' => true,
            'message' => 'Compétences ' . $categorie . ' chargées',
            'categorie' => $categorie,
            'competences' => $competences
        ]);
    }
}