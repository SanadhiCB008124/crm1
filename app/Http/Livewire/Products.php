<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Color;
use App\Models\Size;
use Livewire\Component;
use App\Models\Product;
use Livewire\WithFileUploads;
use Livewire\WithPagination;


class Products extends Component
{
      use WithFileUploads;
    public $products, $name, $detail, $unit_price,$image, $product_id, $category_id, $stocks,$color_id,$size_id;
    public $isOpen = 0;

    public $layout = 'layouts.admin-layout';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    public $category;
    public $categories;
    public  $color;
    public $size;



    public $search;


    public function mount()
    {
        $this->categories = Category::all();
        $this->colors=Color::all();
        $this->sizes=Size::all();

    }


    public function render()
    {
        return view('livewire.products', [
            'product' => Product::where('name', 'like', '%' . $this->search . '%')->get(),
        ]);
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
        $this->color_id = '';
        $this->size_id = '';
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
            'color_id' => 'required',
            'size_id' => 'required',

        ]);

        Product::updateOrCreate(['id' => $this->product_id], [
            'name' => $this->name,

            'detail' => $this->detail,
            'unit_price' => $this->unit_price,
            'image' => $this->image->storePublicly('images', 'public'),
            'category_id' => $this->category_id,
            'stocks' => $this->stocks,
            'color_id' => $this->color_id,
            'size_id' => $this->size_id,
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
        $this->color_id = $product->color_id;
        $this->size_id = $product->size_id;


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
