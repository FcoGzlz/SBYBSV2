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
        'telefono_contacto',
        'nombre_contacto_2',
        'telefono_contacto_2',
        'nombre_contacto_3',
        'telefono_contacto_3',
        'email',
        'email_contacto_2',
        'email_contacto_3',
        'nombre_contacto_4',
        'telefono_contacto_4',
        'email_contacto_4',
        'nombre_contacto_5',
        'telefono_contacto_5',
        'email_contacto_5',
        'ciudad',
        'direccion',
        'tipo_institucion',
        'id_cliente'
    ];

    public function cliente(){
        return $this->belongsTo(Cliente::class, 'id_cliente', 'id');
    }

    public function cctv(){
       return $this->hasOne(Cctv::class, 'id_locacion', 'id');
    }

    public function alarma(){
       return $this->hasOne(Alarma::class, 'id_locacion', 'id');
    }
}
