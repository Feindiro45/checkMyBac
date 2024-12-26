<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('resultats', function (Blueprint $table) {
            $table->id();
            $table->string('matricule');
            $table->string('id_annee');
            $table->string('id_centre');
            $table->string('ville_centre');
            $table->string('status');
            $table->string('nom_eleve');
            $table->string('lycee_origine');
            $table->string('serie');
            $table->string('mention');
            $table->string('statut');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resultats');
    }
};