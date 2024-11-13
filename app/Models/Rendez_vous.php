<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Rendez_vous extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'nom_patient',
        'telephone',
        'date',
        'heure',
        'nom_medecin',
        'specialite',
        'email_medecin',
        
    ];
}
