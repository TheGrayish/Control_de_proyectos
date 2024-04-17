<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'archivo', // Agrega 'archivo' al array $fillable
        'horario',
        'materia',
        'profesor',
        'descripcion',
    ];

}
