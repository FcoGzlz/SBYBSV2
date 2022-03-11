<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NatCctv extends Model
{
    use HasFactory;

    protected $table = 'nat_cctv';
    protected $primarykey = 'id';

    protected $fillable = [
        'nombre'
    ];

    public function cctv(){
        return $this->hasMany(Cctv::class,);
    }

}
