<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;

    protected $table = "comentario";
    protected $primaryKey = 'id';

    protected $fillable = [
        'comentario',
        'hora',
        'turno',
    ];

    public function turno(){
        return $this->belongsTo(Turno::class, 'turno', 'id');
    }

}
