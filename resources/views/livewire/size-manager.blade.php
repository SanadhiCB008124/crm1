<div>


    <ul class="flex flex-row space-x-6 mb-2">
        @foreach ($sizes as $size)
            <li>
                {{ $size->name }}
            <!--    <button wire:click="deleteSize({{ $size->id }})">Delete</button>-->
            </li>
        @endforeach
    </ul>

    <form wire:submit.prevent="addSize">
        <input type="text" wire:model="name" placeholder="Add a new size" class="py-2 px-2 border-black border">
        <button type="submit" class="bg-red-400 text-white rounded-full py-2 px-2">Add</button>
    </form>
</div>
