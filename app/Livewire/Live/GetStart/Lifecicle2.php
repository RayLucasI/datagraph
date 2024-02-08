<?php

namespace App\Livewire\Live\GetStart;

use Livewire\Component;


class Lifecicle2 extends Component
{
    public $name = 'Jelly';

    public function render()
    {
        return view('livewire.live.get-start.lifecicle2')
        ->extends('livewire.live.get-start.layouts.app');
    }
}
