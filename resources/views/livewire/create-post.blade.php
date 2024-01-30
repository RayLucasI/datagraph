<div>
    <h2>New Post:</h2>
    <br>
    <form wire:submit="save">
        <label for="">
            <span>Title</span>
            <input type="text" wire:model="titulo">
            @error('titulo') <em>{{ $message }}</em> 
            @enderror
        </label>
        <br><br>
        <label>
            <span>Content</span>
            <textarea wire:model="tema"></textarea>
            @error('tema') <em>{{ $message }}</em> @enderror            
        </label>
        <button type="submit" 
                class="bg-yellow-300 hover:bg-ywllow-700 text-black font-blod py-2 px-4 rounded-full">Save</button>
    </form>
</div>
