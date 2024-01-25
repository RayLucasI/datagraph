<div>
    <div class="bg-blue-600 text-yellow-300 text-3xl">Lista de Libros</div>
    <br><br>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Titulo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Contenido
                    </th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($libros as $libro)
                    <tr wire:key="{{$libro->id}}" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                                {{$libro->titulo}}
                            </td>
                            <td class="px-6 py-4">
                                {{$libro->tema}}
                            </td>                        
                            <td> Verificar porque pulsamos la casilla de no notificar y ya no aparece la ventana emergente.
                            <button type="button" 
                                    wire:click="delete({{ $libro->id }})" 
                                    wire:confirm="Quieres borrar el libro:\n\n{{$libro->titulo}}?"
                                    class="bg-yellow-300 hover:bg-ywllow-700 text-black font-blod py-2 px-4 rounded-full">Eliminar</button>
                            </td>
                    </tr>
                @endforeach    
            </tbody>
        </table>
    </div>
</div>
