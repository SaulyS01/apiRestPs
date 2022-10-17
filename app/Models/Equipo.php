<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    public $table = 'equipos';

    protected $fillable = ['equipo', 'estado'];

    public function miembros()
    {
        return $this->hasMany(Miembro::class);
    }
}
