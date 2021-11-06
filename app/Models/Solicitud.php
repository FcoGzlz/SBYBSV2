<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;
    protected $table = 'solicitud';
    protected $primaryKey = 'id';

    protected $fillable = [
        'rut',
        'nombreCliente',
        'apellidoCliente',
        'telefono',
        'tipoOrganizacion',
        'nombreOrganizacion',
        'direccion',
        'descripcion',
        'prioridad',
        'categoria',
        'responsable',
        'fechaIngreso',
        'fechaCierre',
        'estado',
    ];

    public function responsable() {
        return $this->hasone(User::class);
    }

    public function categoria() {
        return $this->hasOne(Categoria::class);
    }

    public function detalles() {
        return $this->hasMany(DetalleSolicitud::class);
    }

    public function scopeBusqueda($query, $busqueda){
        if ($busqueda) {
            return $query->where('rut', 'like', "%$busqueda%")
            ->orWhere('nombreCliente', 'like', "%$busqueda%")
            ->orWhere('apellidoCliente', 'like', "%$busqueda%");
        }
    }

    public function scopeNombre($query, $nombre){
        if ($nombre) {
            return $query->where('nombreCliente', 'like', "%$nombre%");
        }
    }

    public function scopeApellido($query, $apellido){
        if ($apellido) {
            return $query->where('apellidoCliente', 'like', "%$apellido%");
        }
    }
}
