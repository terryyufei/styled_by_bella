<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Product::paginate(12);

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view("products.create", compact("categories"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'size' => 'required|string',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        ]);


        $filename = $this->saveUploadedFile($request, 'image');



        $product = new Product([
            'name' => $request->name,
            'image' => $filename,
            'size' => $request->size,
            'price' => $request->price,
            'category_id' => $request->category_id
        ]);

        $product->save();

        return redirect()->route('products.index')->with('success', 'Product added successfully');
    }

    public function saveUploadedFile($request, $field, $previousFilename = null)
    {
        $file = $request->file($field);

        if ($file) {
            $destinationPath = 'img/';
            $filename = date('YmdHis') . "_" . $file->getClientOriginalName();
            $file->move($destinationPath, $filename);
            return $filename;
        } elseif ($previousFilename) {
            return $previousFilename;
        } else {
            return null;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'size' => 'required|string',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product = Product::findOrFail($id);

        $filename = $product->image; // Default to existing filename
        if ($request->hasFile('image')) {
            // Handle file upload
            $filename = $this->saveUploadedFile($request, 'image', $product->image);
        }

        $product->update([
            'name' => $request->name,
            'image' => $filename,
            'size' => $request->size,
            'price' => $request->price,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');        
        $results = Product::where('name', 'like', "%$query%")->get();


        return view('products.search', compact('results'));
    }
}
