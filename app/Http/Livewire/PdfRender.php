<?php

namespace App\Http\Livewire;

use App\Models\Turno;
use Livewire\Component;

class PdfRender extends Component
{
    public $reporte;

    protected $listeners = ['render' => 'visualizarPDF'];

    public function updatedReporte(){
        dd($this->reporte);
    }


    public function visualizarPDF($reporte){

        $this->reporte = $reporte;
    }

    public function render(){

        return view('livewire.pdf-render',[
            'rep' => Turno::where('id', '=', $this->reporte)->first(),
        ]);

    }
}
