<tr>
    <td class="px-6 py-4">
        {{$libro->titulo}}
    </td>
    <td class="px-6 py-4">
        {{$libro->tema}}
    </td>                        
    <td>     
        <button type="button" 
                wire:click="$parent.delete({{ $libro->id }})" 
                wire:confirm="Quieres borrar el libro:\n\n{{$libro->titulo}}?"
                class="bg-yellow-300 hover:bg-ywllow-700 text-black font-blod py-2 px-4 rounded-full">
                Eliminar
        </button>
    </td>
    <td>     
        <button type="button" 
                wire:navigate href="/nuevo" 
                class="bg-yellow-300 hover:bg-ywllow-700 text-black font-blod py-2 px-4 rounded-full">
                Nuevo
        </button>
    </td>

</tr>