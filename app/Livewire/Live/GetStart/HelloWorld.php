<?php

namespace App\Livewire\Live\GetStart;

use Livewire\Component;

#[Title('V2:Hellow')]
class HelloWorld extends Component
{
    public $name =  'Jelly';
    public $loud = false;
    public $greeting = ["Adios"];

    public function resetName($name = "Chico"){
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.live.get-start.hello-world')
        ->layout('components.layouts.app1');
    }
}
