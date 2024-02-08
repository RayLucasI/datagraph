<div>
    <input wire:model.live.lazy='name' type="text">
    <input wire:model.live="loud" type="checkbox">
    <br>
    <select wire:model.live="greeting" multiple>
        <option>Hello</option>
        <option>Goodbye</option>
        <option>Adios</option>        
    </select>
    <br>
    {{implode(', ',$greeting)}} {{$name}} @if ($loud) ! @endif
    <br><br>
    <button wire:click="resetName($event.target.innerText)">Reset Names</button>
    <br><br>
    <button wire:click="resetName('Bingo')">Reset to Bingo</button>
    <br><br>
    <div>
        <button wire:mouseenter="resetName('Bingo')">Reset on mouse over</button>
    </div>    
    <br><br>
    <form action="#" wire:submit.prevent="resetName('Bingo')">
        <div>
            <button>form with action</button>
        </div>
    </form>
    <br><br>
    <form action="#" wire:submit.prevent="$set('name','Bingo')">
        <div>
            <button>Alternativa de asignación (Si usar funciones de asignación) </button>
        </div>
    </form>
    <br><br>
</div>
