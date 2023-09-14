<!-- resources/views/livewire/colors-manager.blade.php -->
<div>
    @if (session()->has('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <h2>Colors Manager</h2>

    <ul>
        @foreach ($colors as $color)
            <li>{{ $color->color}}
            <button wire:click="deleteColor({{ $color->id }})">Delete</button></li>
        @endforeach
    </ul>

    <form wire:submit.prevent="addColor">
        <input type="text" wire:model="newColor" placeholder="New Color">
        @error('newColor') <span class="text-red-500">{{ $message }}</span> @enderror
        <button type="submit">Add Color</button>
    </form>
</div>
