<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Posts;

use Livewire\Attributes\Rule;

class CreatePost extends Component
{
    #[Rule('required', message: 'Men, agrega el titulo')]    
    #[Rule('min:4', message: 'Mensaje muy corto')]
    public $titulo = '';

    #[Rule('required')]    
    public $tema = '';

    public function save(){

        $this->validate();

        Posts::create([
            'titulo' => $this->titulo,
            'tema'  => $this->tema,
        ]);
        $this->redirect('/lista');
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
