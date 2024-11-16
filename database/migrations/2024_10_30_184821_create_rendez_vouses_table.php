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
        Schema::create('rendez_vouses', function (Blueprint $table) {
            $table->id();
            $table->string('nom_patient');
            $table->string('telephone');
            $table->date('date');
            $table->time('heure')->unique();
            $table->string('nom_medecin');
            $table->string('specialite');
            $table->enum('statut', ['en attente', 'accepté', 'refusé'])->default('en attente');
            $table->string('email_patient')->nullable(); 
            $table->string('email_medecin');
            $table->string('nom_etablissement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendez_vouses');
    }
};
