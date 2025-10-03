<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universidad extends Model
{
    use HasFactory;

    // Columnas que se pueden llenar en masa
    protected $fillable = [
        'nombre',
        // agrega más columnas si las tienes
    ];
}

