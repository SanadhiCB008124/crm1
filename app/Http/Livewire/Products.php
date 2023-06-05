<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithFileUploads;

class Products extends Component
{
      use WithFileUploads;
    public $products, $name, $detail, $price,$image, $product_id, $catagory, $stocks;
    public $isOpen = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    public function render()
    {
        $this->products = Product::all();
        return view('livewire.products');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->name = '';
        $this->detail = '';
        $this->price = '';
        $this->product_id = '';
        $this->image = '';
        $this->catagory = '';
        $this->stocks = '';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            'name' => 'required',
            
            'detail' => 'required',
            'price' => 'required',
            'image' => 'required|image',
            'catagory' => 'required',
            'stocks' => 'required',

        ]);
   
        Product::updateOrCreate(['id' => $this->product_id], [
            'name' => $this->name,
            
            'detail' => $this->detail,
            'price' => $this->price,
            'image' => $this->image->storePublicly('images', 'public'),
            'catagory' => $this->catagory,
            'stocks' => $this->stocks,
        ]);
  
        session()->flash('message', 
            $this->product_id ? 'Product Updated Successfully.' : 'Product Created Successfully.');
  
        $this->closeModal();
        $this->resetInputFields();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $this->product_id = $id;
        $this->name = $product->name;
        $this->detail = $product->detail;
        $this->price = $product->price;
        $this->image = $product->image;
        $this->catagory = $product->catagory;
        $this->stocks = $product->stocks;
    
        $this->openModal();
    }

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Product::find($id)->delete();
        session()->flash('message', 'Product Deleted Successfully.');
    }
}