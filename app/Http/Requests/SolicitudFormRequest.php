<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SolicitudFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'rut' => ['required', 'string'],
            'nombreCliente' => ['required', 'string', 'max:50'],
            'apellidoCliente' => ['required', 'string', 'max:50'],
            'telefono' => ['required', 'string', 'max:11'],
            'tipoOrganizacion' => ['required', 'string', 'max:11'],
            'nombreOrganizacion' => ['max:100'],
            'direccion' => ['required', 'string', 'max:100'],
            'descripcion' => ['required', 'string', 'max:300'],
            'prioridad' => ['required', 'integer'],
            'categoria' => ['integer', 'required'],
            'responsable' => ['integer'],
        ];
    }
}
