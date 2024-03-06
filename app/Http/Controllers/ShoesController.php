<?php

namespace App\Http\Controllers;

use App\Models\Shoes;
use Illuminate\Http\Request;

class ShoesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shoes = Shoes::all();

        return view('products.create_s',compact('shoes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layout.shoe');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData= $request->all();
        $fileName = time().$request->file('s_image')->getClientOriginalName();
        $path = $request->file('s_image')->storeAs('images',$fileName,'public');
        $requestData['s_image'] = '/storage/'.$path;
        Shoes::create($requestData);

        return redirect()->route('shoes.index')->with('success',"Shoe added successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $shoes= Shoes::findOrFail($id);

        return view('products.show_s',compact('shoes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $shoes= Shoes::findOrFail($id);

        return view('products.edit_s',compact('shoes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $shoes= Shoes::findOrFail($id);

        $shoes->update($request->all());

        return redirect()->route('shoes.index')->with('success',"Shoe updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $shoes= Shoes::findOrFail($id);

        $shoes->delete();

        return redirect()->route('shoes.index')->with('success',"Shoe deleted successfully");
    }
}
