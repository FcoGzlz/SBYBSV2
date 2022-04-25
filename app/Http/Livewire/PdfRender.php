<?php

namespace App\Http\Livewire;

use App\Models\Turno;
use Livewire\Component;

class PdfRender extends Component
{
    public $reporte;

    protected $listeners = ['refreshComponent' => 'tst'];

    public function updatedReporte(){
        dd($this->reporte);
    }

    public function tst(){
        return redirect(request()->header('Referer'));
    }

    public function render(){

        return view('livewire.pdf-render',[
            'rep' => Turno::where('id', '=', $this->reporte)->first(),
        ]);

    }
}
