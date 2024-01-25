<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

#[Title('Counter')]
class Counter extends Component
{
    public $count = 1;

    public function increment(){
        $this->count += 1;
    }

    public function decrement(){
        $this->count -= 1;
    }

    public function render()
    {

        return view('livewire.counter');

    }
}
