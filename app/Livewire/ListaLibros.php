<?php

namespace App\Livewire;
use Livewire\Component;

use App\Models\Posts;

#[Title('Lista')]
class ListaLibros extends Component
{
    public function delete(Posts $post){

       //$posts = Posts::find($postId)->delete();
       $post->delete();

    }
    public function render()
    {
        return view('livewire.lista-libros',['libros' => Posts::all()]);
    }
}
