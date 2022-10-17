<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Miembro extends Model
{
    use HasFactory;
    public $table = 'miembros';

    protected $fillable = ['nombres', 'edad', 'feNacimiento', 'idEquipo'];

    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }
}
