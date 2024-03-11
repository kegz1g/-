<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $categories=Category::all();
        $products=Product::all();
        return view ('pages.index', compact('products', 'categories'));
    }
    public function add(Request $request)
    {
        $validate=$request->validate([
           'name'=>'required|string|min:3|max:255',
            'price' => 'required|numeric',
            'text' => 'required|string',
            'category_id' => 'required'
        ], [
            'name.required'=>'Заполните поле!',
            'price.required'=>'Заполните поле!',
            'text.required'=>'Заполните поле!',
        ]);
        Product::create($validate);
        return redirect()->route('index')->with('success', 'успешно добавлено');
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $validate = $request->validate([
            'name'=>'required',
            'price' => 'required',
            'text' => 'required',
            'category_id' => 'required'
        ]);
        $product->update($validate);
        return redirect()->route('index');
    }

    public function edit($id){
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('pages.edit', compact('product', 'categories'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.show', compact('product'));
    }
    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('index');
    }
}

