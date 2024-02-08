<?php

namespace App\Livewire\Live\GetStart;

use Livewire\Component;

class Lifecicle extends Component
{

    public $name = 'Jelly';

    public function mount(){
        $this->name = 'foo';        
    }

    public function render()
    {
        return view('livewire.live.get-start.lifecicle')        
        ->layout('livewire.live.components.layouts.app1');
    }
}
