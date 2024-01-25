<div>
    <input wire:model.live="name" type="text"/>
    Hello {{$name}}
    <div>Th curret time es {{time()}}</div>
    <button wire:click="$refresh" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
            Refresh
    </button>
</div>
    
