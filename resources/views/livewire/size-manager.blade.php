<div>

    <h2>Size Manager</h2>

    <ul class="flex flex-row space-x-6 ">
        @foreach ($sizes as $size)
            <li class="font-bold">
                {{ $size->name }}
            <!--    <button wire:click="deleteSize({{ $size->id }})">Delete</button>-->
            </li>
        @endforeach
    </ul>

    <div class="flex flex-row justify-end ">
    <form wire:submit.prevent="addSize">
        <input type="text" wire:model="name" placeholder="Add a new size" class="py-2 px-2 border-black border">
        <button type="submit" class="bg-gray-600 text-white   py-2 px-2">Add Size</button>
    </form>
    </div>
</div>
