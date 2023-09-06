<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use App\Models\Product;
use Livewire\WithFileUploads;


class Products extends Component
{
      use WithFileUploads;
    public $products, $name, $detail, $unit_price,$image, $product_id, $category_id, $stocks,$color,$size;
    public $isOpen = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    public $category;
    public $categories;

    public function mount()
    {
        $this->categories = Category::all();
        
    }


    public function render()
    {
        $product = Product::all();
        $category=Category::all();

        return view('livewire.products',['product' => $product],[ 'category' => $category]);
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
        $this->unit_price = '';
        $this->product_id = '';
        $this->image = '';
        $this->category_id = '';
        $this->stocks = '';
        $this->color = '';
        $this->size = '';
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
            'unit_price' => 'required',
            'image' => 'required|image',
            'category_id' => 'required',
            'stocks' => 'required',
            'color' => 'required',
            'size' => 'required',

        ]);

        Product::updateOrCreate(['id' => $this->product_id], [
            'name' => $this->name,

            'detail' => $this->detail,
            'unit_price' => $this->unit_price,
            'image' => $this->image->storePublicly('images', 'public'),
            'category_id' => $this->category_id,
            'stocks' => $this->stocks,
            'color' => $this->color,
            'size' => $this->size,
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
        $this->unit_price = $product->unit_price;
        $this->image = $product->image;
        $this->category_id = $product->category_id;
        $this->stocks = $product->stocks;
        $this->color = $product->color;
        $this->size = $product->size;


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
