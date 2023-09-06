<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryList()
    {
        $categories = Category::all();
        return view('category-list', compact('categories'));
    }

    public function addCategory()
    {
        return view('add-category');
    }

    public function saveCategory(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
        ]);

        $category_name = $request->category_name;

        $category = new Category();
        $category->category_name = $category_name;

        $category->save();
        return redirect('category-list')->with('success', 'Category added successfully');
    }

    public function editCategory($id)
    {
        $category = Category::where('id', '=', $id)->first();
        return view('edit-category', compact('category'));
    }

    public function updateCategory(Request $request)
    {
        $request->validate([
            'category_name'=>'required'
        ]);
        $id = $request->id;
        $category_name = $request->category_name;

        Category::where('id', '=', $id)->update([
            'category_name' => $category_name,
        ]);
        return redirect('category-list')->with('success', 'Category updated successfully');
    }

    public function deleteCategory(Request $request){
        $id = $request->id;
        Category::where('id', '=', $id)->delete();
        return redirect('category-list')->with('success', 'Category deleted successfully');

    }
}
