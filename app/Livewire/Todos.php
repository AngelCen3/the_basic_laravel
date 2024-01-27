<?php

namespace App\Livewire;

use Livewire\Attributes\Title; //lo importamos primero
use Livewire\Component;

//Lo ponemos para que cada titulo de la pagina cambie
#[Title('Todos')]
class Todos extends Component
{
    //Show the value of $todo in the input field
    public $todo = '';

    public $todos = ['who cares'];

    //lo puedo escribir asi o como abajo
    /*public function updated($property, $value ) {
       $this-> $property= strtoupper($value);*/

    public function updatedTodo($value ) {
       // dd($property, $value);
       //Lo pasa a mayuscula strtoupper
       $this->todo = strtoupper($value);
       //$this->validate();
    }

    //initialize variables mount()
    /*public function (montar)-> mount(){

        $this->todos = [
            'Take out trash',
            'Do dishes',
        ];

        $this->todo = 'Type todo...';
    }*/
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
