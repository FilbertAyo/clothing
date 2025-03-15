<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $product = Product::all();

        return view('products.create_wc',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layout.dashboard');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Product::create($request->all());

        $requestData= $request->all();
        $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images',$fileName,'public');
        $requestData['image'] = '/storage/'.$path;
        Product::create($requestData);

        return redirect()->route('dashboard.index')->with('success',"Product added successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product= Product::findOrFail($id);

        return view('products.show_wc',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product= Product::findOrFail($id);

        return view('products.edit_wc',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product= Product::findOrFail($id);

        $product->update($request->all());

        return redirect()->route('dashboard.index')->with('success',"Product updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product= Product::findOrFail($id);

        $product->delete();

        return redirect()->route('dashboard.index')->with('success',"Product deleted successfully");
    }
}
