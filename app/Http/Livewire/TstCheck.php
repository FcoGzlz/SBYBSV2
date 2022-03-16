<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class TstCheck extends Component
{
    public $checks = [];

    public $hora = "";

    public function hora(){
        $this->hora = Carbon::now()->isoFormat('dddd dd, mmmm aaaa - hh:mm');
    }

    public function render()
    {

        return view('livewire.tst-check');
    }
}
