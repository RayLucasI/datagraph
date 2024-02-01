<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Posts;

class PostRow extends Component
{
    public Posts $libro;

    //public function mount($libro)
    //{
    //    $this->libro = $libro;
    //}

    //public function render()
    //{
    //    return view('livewire.post-row');
    //}
}
