<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoAlarma extends Model
{
    use HasFactory;

    protected $table = 'tipo_alarma';
    protected $primarykey = 'id';

    protected $fillable = [
        'nombre',
    ];

    public function Alarma(){
        return $this->hasMany(Alarma::class, 'id');
    }
}
