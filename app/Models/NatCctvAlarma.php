<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NatCctvAlarma extends Model
{
    use HasFactory;

    protected $table = 'nat_cctv_alarma';
    protected $primarykey = 'id';

    protected $fillable = [
        'nombre',
    ];

    public function alarma() {
        return $this->hasMany(Alarma::class);
    }
}
