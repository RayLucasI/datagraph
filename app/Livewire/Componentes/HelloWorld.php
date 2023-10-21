<?php

namespace App\Livewire\Componentes;

use Livewire\Component;

class HelloWorld extends Component
{
    public function render()
    {
        return view('livewire.componentes.hello-world',['name'=>'jelly']);
    }
}
