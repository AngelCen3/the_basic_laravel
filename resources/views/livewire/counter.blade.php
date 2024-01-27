<div>
    <!--we declared a varible in counter.php-->
    Count: {{ $count }}

    <!--We clicked to activate increment function-->
    <button wire:mouseenter="increment(2)">+</button>
    {{--Aplica cuando el puntero entra al botton--}}
    {{--<button wire:click="increment(2)">+</button>--}}

</div>
