<?php
// database/migrations/2024_01_01_create_projets_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('description');
            $table->string('image')->nullable();
            $table->json('technologies');
            $table->string('lien_github')->nullable();
            $table->string('lien_demo')->nullable();
            $table->string('categorie');
            $table->integer('ordre_affichage')->default(0);
            $table->boolean('en_avant')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('projets');
    }
};