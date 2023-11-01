<?php

namespace App\Livewire\Componentes;

use Livewire\Component;

class Todos extends Component
{
    public $todo = '';
    public $todos = ['Who Cares']; // $todos = Todo::all(); 

    /*
    public function updated($property,$value){  
        // Dispara el metodo cuando el parámetro $todo se actuliza desde la página web mediante el wire.model="todo".
        // dd($property, $value);
        if($property='todo'){   // El mount es general, se puede indentificar a la variable que lo lanzó desde la pagina
            code here
        }
        $this->$property = strtoupper($value);
    }
    */   

    public function updatedTodo($value){
        $this->todo = strtoupper($value);
        //$this->validate(); // Permite hacer validaciones en cuanto es actualizado el parámetro antes dar submit the all form 
    }

    public function add(){
        $this->todos[] = $this->todo;
        $this->reset('todo');  // Equivalente a $this->todo = ''. Despues de escribir el Item, se pasa al arreglo y se borra.
    }

    /*
    // Una vez que se carga la componente en el navegador, se dispara el método mount().
    public function mount(){      
        // Se pueden hacer las consultas desde la base de datos.
        $this->todos = ['Tirar la basura','Lavar los trastes' ];

        $this->todo = 'Type todo...';
    }
    */

    public function render()
    {
        return view('livewire.componentes.todos');
    }
}
