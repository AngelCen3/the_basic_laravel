<?php

use App\Livewire\Counter;
use App\Livewire\Todos;
use Illuminate\Support\Facades\Route;
//Esta es una forma de ponerlo pero tambien existe la de abajo
/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/counter', function() {
    return view('counter');
} );*/

Route::get('/', Todos::class);
Route::get('/counter', Counter::class);
