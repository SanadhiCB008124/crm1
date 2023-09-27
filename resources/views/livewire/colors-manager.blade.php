<!-- resources/views/livewire/colors-manager.blade.php -->
<div class="w-full">
    @if (session()->has('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <h2>Colors Manager</h2>

        <ul class="flex flex-row space-x-8 mb-2">
            @foreach ($colors as $color)
                <li >
                    <span class="border-black border-2" style="background-color: {{ $color->color }};     display: inline-block; width: 20px; height: 20px; border-radius: 50%; margin-right: 10px;"></span>
                    {{ $color->color }}
                    <!--<button wire:click="deleteColor({{ $color->id }})">Delete</button>-->
                </li>
            @endforeach
        </ul>
        <div class="flex flex-row w-full justify-end">
        <form wire:submit.prevent="addColor">
        <input type="text" wire:model="newColor" placeholder="Add New Color" class="py-2 px-2 border-black border">
        @error('newColor') <span class="text-red-500">{{ $message }}</span> @enderror
        <button type="submit " class="bg-gray-600  px-2 py-2  text-white">Add Color</button>
        </form>
</div>
</div>
