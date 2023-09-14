<div>
    <form wire:submit.prevent="addSize">
        <input type="text" wire:model="name" placeholder="Add a new size">
        <button type="submit">Add</button>
    </form>

    <ul>
        @foreach ($sizes as $size)
            <li>
                {{ $size->name }}
                <button wire:click="deleteSize({{ $size->id }})">Delete</button>
            </li>
        @endforeach
    </ul>
</div>
