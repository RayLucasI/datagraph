<?php

namespace App\Livewire\Live\GetStart;

use Livewire\Component;

#[Title('V2:Hellow')]
class HelloWorld extends Component
{
    public $name =  'Jelly';
    public function render()
    {
        return view('livewire.live.get-start.hello-world')
        ->layout('components.layouts.app1');
    }
}
