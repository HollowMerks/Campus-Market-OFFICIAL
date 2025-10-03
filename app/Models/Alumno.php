<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'email',
        'universidad_id', // si quieres relacionarlo con universidad
    ];

    // Relación con Universidad
    public function universidad()
    {
        return $this->belongsTo(Universidad::class);
    }
}
