<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    use HasFactory;

    protected $table = "turno";
    protected $primaryKey = "id";

    protected $fillable = [
        'responsable',
        'turno',
        'fecha',
        'identificador',
        'finalizado',
        'nombre_pdf'
    ];

    public function comentarios(){
        return $this->hasMany(Comentario::class, 'turno','id');
    }

    public function reportes(){
        return $this->hasMany(Reporte::class, 'identificador');
    }
}
