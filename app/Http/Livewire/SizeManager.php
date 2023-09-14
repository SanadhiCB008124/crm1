<?php


namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Size;

class SizeManager extends Component
{
    public $sizes;
    public $name;

    public function render()
    {
        $this->sizes = Size::all();

        return view('livewire.size-manager');
    }

    public function addSize()
    {
        $this->validate([
            'name' => 'required|unique:sizes',
        ]);

        Size::create([
            'name' => $this->name,
        ]);

        $this->name = ''; // Clear the input field
        $this->emit('sizeAdded'); // Emit an event to notify other components
    }

    public function deleteSize($id)
    {
        $size = Size::find($id);

        if ($size) {
            $size->delete();
            $this->emit('sizeDeleted'); // Emit an event to notify other components
        }
    }
}
