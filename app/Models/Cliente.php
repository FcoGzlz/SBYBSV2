<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'cliente';
    protected $primarykey = 'id';

    protected $fillable = [
        'nombre',
        'rut_cliente',
    ];

    public function locaciones(){
        return $this->hasMany(Locacion::class, 'id_cliente', 'id');
    }

    public function cctv() {
        return $this->hasMany(Cctv::class, 'id_cliente', 'id');
    }

    public function alarmas() {
        return $this->hasMany(Alarma::class, 'id_cliente', 'id');
    }
}
