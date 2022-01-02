<?php

namespace App\Http\Requests;

use App\Models\DetalleSolicitud;
use Illuminate\Foundation\Http\FormRequest;

class DetalleEditFormRequest extends FormRequest
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

        $url = $this->url();
        $idD = explode('/', $url);

        $detalle = DetalleSolicitud::findOrFail($idD[6]);

        return [
            'detalleEdit' . $detalle->id => ['required'],
        ];
    }

    public function messages()
    {
        $url = $this->url();
        $idD = explode('/', $url);

        $detalle = DetalleSolicitud::findOrFail($idD[6]);
        return [
            'detalleEdit'.$detalle->id.'.required' => 'El campo detalle es obligatorio',
        ];
    }
}
