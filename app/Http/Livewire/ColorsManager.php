<?php


namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Color;

class ColorsManager extends Component
{
    public $colors;
    public $newColor;

    public function mount()
    {
        $this->colors = Color::all();

    }

    public function addColor()
    {
        $this->validate([
            'newColor' => 'required|unique:colors,color',
        ]);

        Color::create(['color' => $this->newColor]);


        $this->colors = Color::all();

        session()->flash('success', 'Color added successfully.');
    }
    public function deleteColor($id)
    {
        $color = Color::find($id);

        if ($color) {
            $color->delete();
            $this->emit('colorDeleted'); // Emit an event to notify other components
        }
    }

    public function render()
    {
        return view('livewire.colors-manager');
    }
}
