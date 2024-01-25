<div>
    count: {{$count}}
    <div class="inline-flex">
        <button wire:click="decrement()" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-l">
            Decrement
        </button>
        <button wire:click="increment()" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded-r">
            increment
        </button>
    </div>
</div>