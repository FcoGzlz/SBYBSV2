<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleSolicitud extends Model
{
    use HasFactory;

    protected $table = 'detalle_solicitud';
    protected $prymaryKey = 'id';

    protected $fillable = [
        'detalle',
        'fecha',
        'solicitud'
    ];

    public function solicitud() {
        return $this->belongsTo(Solicitud::class);
    }
}
