<?php

namespace App\Livewire;

use Livewire\Attributes\Title; //lo importamos primero
use Livewire\Component;

//Lo ponemos para que cada titulo de la pagina cambie
#[Title('Counter')]
class Counter extends Component
{
    //variable automaticamente se puede usar en counter.blade.php
    public $count = 1;

    //Este parametro lo pasamos desde counter.blade.php
    public function increment($by){
        //$this->count++;
        $this->count=$this->count + $by;
    }

   // private function (No la usamos es solo para tenerlo en cuenta)
    protected function decrement($by){
        //$this->count++;
        $this->count=$this->count - $by;
    }

    public function render()
    {
        return view('livewire.counter', [
            'count' => $this->count
        ]);
    }
}
