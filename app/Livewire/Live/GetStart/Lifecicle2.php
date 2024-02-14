<?php

namespace App\Livewire\Live\GetStart;

use Livewire\Component;


class Lifecicle2 extends Component
{
    public $name = 'Yelis';
    public $loud = false;
    public $greeting = ["Hello"];

    public function resetName($name='Chico')
    {
        //$this->name = 'Chico';
        $this->name = $name;
    }
 
    public function render()
    {
        return view('livewire.live.get-start.lifecicle2')
        ->layout('components.layouts.app1');
    }
}


