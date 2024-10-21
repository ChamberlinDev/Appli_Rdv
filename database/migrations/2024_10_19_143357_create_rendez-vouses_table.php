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
        Schema::create('rendez-vouses', function (Blueprint $table) {
            $table->id();
            $table->string('nom_patient');
            $table->string('prenom_patient');
            $table->integer('telephone_patient');
            $table->string('objet');
            $table->date('Date_rdv');
            $table->string('nom_medecin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendez-vouses');
    }
};
