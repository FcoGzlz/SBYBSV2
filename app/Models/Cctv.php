<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cctv extends Model
{
    use HasFactory;

    protected $table = 'cctv';
    protected $primarykey = 'id';

    protected $fillable = [
        'id_nat_cctv',
        'id_tipo_alarma',
    ];

    public function locacion() {
        return $this->belongsTo(Locacion::class, 'id_locacion', 'id');
    }

    public function natCctv() {
        return $this->belongsTo(NatCctv::class, 'id_nat_cctv', 'id');
    }

    public function tipoCamara() {
        return $this->belongsTo(tipoCamara::class, 'id_tipo_camara', 'id');
    }

}
