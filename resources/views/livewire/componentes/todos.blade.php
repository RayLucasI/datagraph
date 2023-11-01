<div>
    <!--
    <input type="text" wire:model="todo">
    <button type="button" wire:click="add">Add</button>
    -->
    <form wire:submit="add">
        <input type="text" wire:model.change="todo">

        <!--
            <span>Current todo: {{$todo}}</span>   
        -->      

        <!--
         <input type="text" wire:model.live="todo">   Actualiza con cada cambio de letra.
         <input type="text" wire:model.live.debounce="todo"> When your fingers have left the keyboard for 250ms, triggers "todo".
         <input type="text" wire:model.live.debounce.5ms="todo"> Adjust the time for debouncing.
         <input type="text" wire:model.live.thro.5ms="todo"> Use "thro" instead of debounce.
         <input type="text" wire:model.change="todo"> Leaving the field, fires "todo" with tab. Real time validation application.
         <input type="text" wire:model.blur="todo"> Loss the focus and update de propiety on the server.
        -->
 
        <!-- 
            <span>Current todo: {{$todo}}</span>            
        -->

        <button type="submit">Add</button>
    </form>
    <ul>
        @foreach ($todos as $todo)
        <li>{{$todo}}</li>
        @endforeach
    </ul>
</div>
