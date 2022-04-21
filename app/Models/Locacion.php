<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Locacion extends Model
{
    use HasFactory;

    protected $table = "locacion";
    protected $prymaryKey = "id";

    protected $fillable = [
        'nombre',
        'nombre_contacto',
        'contacto_telefono',
        'email',
        'ciudad',
        'direccion',
        'tipo_institucion',
    ];

    public function cliente(){
        return $this->belongsTo(Cliente::class, 'id_cliente', 'id');
    }

    public function cctv(){
       return $this->hasOne(Cctv::class, 'id_locacion', 'id');
    }

    public function alarmas(){
       return $this->hasOne(Alarma::class, 'id_locacion', 'id');
    }
}
