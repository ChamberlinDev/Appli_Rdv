<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendez_vous extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_patient',
        'telephone',
        'date',
        'heure',
        'nom_medecin',
        'specialite',
    ];
}
