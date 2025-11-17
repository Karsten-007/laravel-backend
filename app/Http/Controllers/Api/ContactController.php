<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        try {
            // Validation
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'subject' => 'required|string|max:255',
                'message' => 'required|string|min:10|max:2000'
            ], [
                'name.required' => 'Le nom est obligatoire',
                'email.required' => 'L\'email est obligatoire',
                'email.email' => 'L\'email doit être valide',
                'subject.required' => 'Le sujet est obligatoire',
                'message.required' => 'Le message est obligatoire',
                'message.min' => 'Le message doit faire au moins 10 caractères'
            ]);

            // Envoi d'email (version log pour test)
            Log::info('📧 EMAIL SIMULÉ - Message reçu:', $validated);

            return response()->json([
                'success' => true,
                'message' => 'Message envoyé avec succès ! Je vous répondrai rapidement.'
            ]);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erreur de validation',
                'errors' => $e->errors()
            ], 422);

        } catch (\Exception $e) {
            Log::error('Erreur contact: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Erreur lors de l\'envoi. Veuillez réessayer.'
            ], 500);
        }
    }
}