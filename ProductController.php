<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // 1. List product
    public function index()
    {
        $product = Product::all();
        return view('index', ['products'=>$product]);
    }

    // 2. Show create form
    public function create()
    {
        return view('create');
    }

    // 3. Store product
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'price' => 'required|numeric|min:1',
            'description' => 'required'
        ]);

        Product::create($request->all());

        return redirect()->route('index')
                         ->with('success', 'Product added successfully');
    }

    // 4. Show edit form
    public function edit(Product $product)
    {
        return view('edit', compact('product'));
    }

    // 5. Update product
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|min:3',
            'price' => 'required|numeric|min:1',
            'description' => 'required'
        ]);

        $product->update($request->all());

        return redirect()->route('index')
                         ->with('success', 'Product updated successfully');
    }

    // 6. Delete product
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('index')
                         ->with('success', 'Product deleted successfully');
    }
}
