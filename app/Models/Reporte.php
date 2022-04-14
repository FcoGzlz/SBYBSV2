<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    use HasFactory;

    protected $table = "reporte";
    protected $primaryKey = "id";

    protected $fillable = [
        'reporte',
        'identificador',

    ];

    public function tunro(){
        return $this->belongsTo(Turno::class, 'identificador', 'identificador');
    }
}
