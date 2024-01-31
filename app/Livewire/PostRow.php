<?php

namespace App\Livewire;

use Livewire\Component;

class PostRow extends Component
{
    public $libro;

    public function mount($libro){
        $this->libro = $libro;
    }
    public function render()
    {
        return view('livewire.post-row');
    }
}
