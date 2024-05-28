<?php

namespace App\Http\Controllers;
use App\Models\Origin;
use App\Models\Category;
use App\Models\Seller;
use App\Models\Vegetable;
use Illuminate\Http\Request;

class VegetableController extends Controller
{
    public function index()
    {
        $vegetables = Vegetable::all();
        return view('vegetables.index', compact('vegetables'));
    }

    public function show($id)
    {
        $vegetable = Vegetable::findOrFail($id);
        return view('vegetables.show', compact('vegetable'));
    }
    
    public function create()
    {
        $categories = Category::all();
        $sellers = Seller::all();
        $origins = Origin::all();
        return view('vegetables.create', compact('categories', 'sellers', 'origins'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'nullable|exists:categories,id',
            'seller_id' => 'nullable|exists:sellers,id',
            'price' => 'required|numeric',
            'availability' => 'required',
            'description' => 'required',
            'origin_id' => 'nullable|exists:origins,id',
            'image' => 'nullable|image'
        ]);

        $vegetable = new Vegetable($request->all());

        if ($request->hasFile('image')) {
            $vegetable->image = $request->file('image')->store('images', 'public');
        }

        $vegetable->save();

        return redirect()->route('vegetables.index')->with('success', 'Vegetable created successfully.');
    }

    public function edit(Vegetable $vegetable)
    {
        $categories = Category::all();
        $sellers = Seller::all();
        $origins = Origin::all();
        return view('vegetables.edit', compact('vegetable', 'categories', 'sellers', 'origins'));
    }

    public function update(Request $request, Vegetable $vegetable)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'nullable|exists:categories,id',
            'seller_id' => 'nullable|exists:sellers,id',
            'price' => 'required|numeric',
            'availability' => 'required',
            'description' => 'required',
            'origin_id' => 'nullable|exists:origins,id',
            'image' => 'nullable|image'
        ]);

        $vegetable->fill($request->all());

        if ($request->hasFile('image')) {
            $vegetable->image = $request->file('image')->store('images', 'public');
        }

        $vegetable->save();

        return redirect()->route('vegetables.index')->with('success', 'Vegetable updated successfully.');
    }
}
