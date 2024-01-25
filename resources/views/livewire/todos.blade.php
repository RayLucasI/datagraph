<div>
    <!--
    <input wire:model="todo" type="text">
    <button wire:click="add" class="bg-blue-500 hover:bg-blue-700 text-white font-blod py-2 px-4 rounded-full">Add</button>
    -->
    <form wire:submit="add">
        <input wire:model.live.change="todo" type="text">
        <!-- 
            <span>current todo {{$todo}}</span>
         -->
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-blod py-2 px-4 rounded-full">Add</button>
    </form>

    <ul>
        @foreach ($todos as $todo )
            <li>{{$todo}}</li>
        @endforeach
    </ul>
</div>
