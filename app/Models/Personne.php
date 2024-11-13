<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

}
