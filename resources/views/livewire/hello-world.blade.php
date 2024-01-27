<div>
    The currebt time is: {{ time()}}
    <button wire:click="$refresh" >Refresh</button>

    <!--$refresh -- The $refresh action triggers
        a re-render of your Livewire component.
        This can be useful when updating the
         component's view without changing
         any property values-->
</div>
