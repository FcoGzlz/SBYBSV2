<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alarma extends Model
{
    use HasFactory;

    protected $table = 'alarma';
    protected $primaryley = 'id';

    protected $fillable = [
        'id_nat_cctv',
        'id_tipo_alarma',
    ];

    public function locacion() {
        return $this->belongsTo(Locacion::class, 'id_locacion', 'id');
    }

    public function NatCctvAlarma(){
        return $this->belongsTo(NatCctvAlarma::class, 'id_nat_cctv', 'id');
    }

    public function tipoAlarma(){
        return $this->belongsTo(TipoAlarma::class, 'id_tipo_alarma', 'id');
    }
}
