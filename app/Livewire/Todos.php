<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    //Show the value of $todo in the input field
    public $todo = '';

    public $todos = [
        'Take out trash',
        'Do dishes',
    ];

    //print at screen
    public function add(){
        //they pluse the value of $todo in array todos
        $this->todos[]=$this->todo;
        //to clean the input
        $this->reset('todo');
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
