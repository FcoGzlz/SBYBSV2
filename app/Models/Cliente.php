<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'cliente';
    protected $primarykey = 'id';

    protected $fillablle = [
        'id_cctv',
        'id_alarma',
        'nombre',
        'apellido',
        'rut',
        'contacto',
        'email',
        'ciudad',
    ];

    public function cctv() {
        return $this->hasMany(Cctv::class, 'id_cliente', 'id');
    }

    public function alarmas() {
        return $this->hasMany(Alarma::class, 'id_cliente', 'id');
    }
}
