<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class HomeController extends Controller
{
    public function home(){

        $product = DB::table('products')->get();

    return view("layout.home",[
        "products"=> $product
      ]);
         }

    public function  addProduct($id){

        $product = Product::findOrFail($id);
        $cart = session()->get('cart',[]);
        // if item not in the cart then add to the cart with quantity =1
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
          $cart[$id] = [
              'name' => $product->name,
               'image'=>$product->image,
               'price'=>$product->price,
                'quantity'=>1
           ];
        }
        session()->put('cart',$cart);
        return redirect()->back()->with('success',"Product has been added to cart");
    }

    public function cart(){
        return view('layout.cart');
    }

    public function deleteProduct(Request $request){
if($request->id){
    $cart = session()->get('cart');
    if(isset($cart[$request->id])){
        unset($cart[$request->id]);
        session()->put('cart',$cart);
    }
    session()->flash('product successfully deleted.. ');
}
    }



}
