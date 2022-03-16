<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $log = array();
    public $fecha = "";

    public function increment(){
        $this->count++;
        $this->fecha = Carbon::now()->isoFormat('dddd, HH:mm:ss');
        session()->flash('message', 'Has sumado 1');
        $this->log[] = "$this->fecha: Has sumado 1!";

    }

    public function substract(){
        $this->count--;
        $this->fecha = Carbon::now()->isoFormat('dddd, HH:mm:ss');
        session()->flash('messageE', 'Has restado 1');
        $this->log[] = "$this->fecha: Has restado 1!";
        Carbon::now()->isoFormat('HH:mm:ss');
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
