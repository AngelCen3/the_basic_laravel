<div>
    <!--Send them to function add-->
    <form wire:submit="add">
        <!--We do that the time of capture was delated debounce -->
       <!--<input type="text" wire:model.live.debounce.5ms="todo">-->
        <input type="text" wire:model.change="todo">

        <!-- wire:model.live hace que cambien en tiempo real -> $todo -->
        <span>Current todo: {{ $todo }}</span>

        <button type="submit">Add</button>
    </form>

    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>
