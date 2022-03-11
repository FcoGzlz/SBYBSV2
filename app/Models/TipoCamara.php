<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCamara extends Model
{
    use HasFactory;

    protected $table = 'tipo_camara';
    protected $primarykey = 'id';

    protected $fillable = [
        'nombre',
    ];

    public function camara(){
        return $this->hasMany(Camara::class);
    }
}
