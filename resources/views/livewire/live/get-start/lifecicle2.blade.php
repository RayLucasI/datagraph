<div>
    <input wire:model.live='name' type="text">
    <br>
    <input wire:model.live="loud" type="checkbox">
    <br>
        <select wire:model.live="greeting" multiple>
            <option>Hello</option>
            <option>Goodbye</option>
            <option>Adios</option>                        
        </select>
    <br>
    {{implode(', ',$greeting)}} {{ $name }} @if ($loud) ! @endif
    <br><br>
    <!--<button wire:click="resetName($event.target.innerText)">Reset Name</button>-->
    <!--<button wire:click="resetName('Bingo')">Reset Name</button>-->
    <div>
        <button wire:mouseenter="resetName('Bingo')">Reset Name</button>
    </div>
    
    <!--<form action="#" wire:submit.prevent="resetName('Bingo')">-->
    <!--    <button>Reset Name</button>-->
    <!--</form>
     Para metodos de una sola linea se puede omitir el resetName en la clase y sustituir por la siguiente sintaxix
    <form action="#" wire:submit.prevent="$set('name','Bingo')">
        <button>Reset Names</button>
    </form>    
    -->

</div>
