<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function search(Request $request)
    {
        // Get the search query from the request
        $searchQuery = $request->input('search');

        // Perform the search query
        $products = Product::where('title', 'like', '%' . $searchQuery . '%')->get();

        // Pass the results to the view
        return view('products.index', compact('products'));
    }

    public function filter(Request $request)
    {
        $category = $request->input('category');

        // Retrieve products based on the selected category
        if ($category) {
            $products = Product::where('category', $category)->get();
        } else {
            $products = Product::all(); // If no category selected, show all products
        }

        return view('products.index', compact('products'));
    }


    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:30',
            'description' => 'nullable|max:100',
            'quantity' => 'nullable|numeric',
            'price' => 'required|numeric',
        ]);
        // Retrieve the authenticated user's seller ID
        $data['seller_id'] = Auth::id();
        $newProduct = Product::create($data);

        return redirect(route('product.index'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'nullable'
        ]);
        
        $data['seller_id'] = Auth::id();

        $product->update($data);

        return redirect(route('product.index'))->with('success', 'Product Updated Succesffully');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect(route('product.index'))->with('success', 'Product deleted Succesffully');
    }
}
