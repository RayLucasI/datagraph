<?php

namespace App\Livewire\Componentes;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;

    public function increment(){
        $this->count++;
    }
    public function decrement(){
        $this->count--;
    }

    public function render()
    {
        return view('livewire.componentes.counter');
    }
}
