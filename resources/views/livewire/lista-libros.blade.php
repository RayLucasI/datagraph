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
                    <livewire:post-row  :key="$libro->id" :$libro >      
                @endforeach    
            </tbody>
        </table>
    </div>
</div>
