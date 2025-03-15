<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Shoes;
use Illuminate\Support\Facades\Cache;

use function PHPUnit\Framework\returnCallback;

class HomeController extends Controller
{
    public function home(){

        $product = DB::table('products')->get();
        $shoes = DB::table('shoes')->get();

    return view("layout.home",[
        "products"=> $product,
        "shoes"=> $shoes
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

        $totalPrice = collect($cart)->sum(function($item){
            return $item['price']*$item['quantity'];
        });

        // Cache::put('totalPrice',$totalPrice);

        session()->put('cart',$cart);
        session()->put('totalPrice',$totalPrice);

        return redirect()->back()->with('success',"Product has been added to cart");
    }


    public function  addShoes($id){

        $shoes = Shoes::findOrFail($id);
        $cart = session()->get('cart',[]);
        // if item not in the cart then add to the cart with quantity =1
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
          $cart[$id] = [
              'name' => $shoes->s_name,
               'image'=>$shoes->s_image,
               'price'=>$shoes->s_price,
                'quantity'=>1
           ];
        }

        $totalPrice = collect($cart)->sum(function($item){
            return $item['price']*$item['quantity'];
        });

        // Cache::put('totalPrice',$totalPrice);

        session()->put('cart',$cart);
        session()->put('totalPrice',$totalPrice);

        return redirect()->back()->with('success',"Product has been added to cart");
    }




    public function cart(){

        $cart = session()->get('cart', []);

    // Calculate total price only if cart is not empty
    $totalPrice = 0;
    if (!empty($cart)) {
        $totalPrice = collect($cart)->sum(function($item){
            // Check if 'price' key exists in the item
            if (isset($item['price']) && isset($item['quantity'])) {
                return $item['price'] * $item['quantity'];
            }
            return 0; // Return 0 if 'price' or 'quantity' key is missing
        });
    }

    return view('layout.cart', compact('totalPrice'));
    }

    public function deleteProduct(Request $request){

        $productId = $request->input('product_id');
        $cart = session()->get('cart',[]);

        if(isset($cart[$productId])){
            unset($cart[$productId]);

            // Reindex the array
            $cart = array_values($cart);

            $totalPrice = collect($cart)->sum(function($item){
                return $item['price']*$item['quantity'];
            });

            session()->put('cart',$cart);
            session()->put('totalPrice',$totalPrice);

            return redirect()->back()->with('success',"Product has been removed from the cart");
        } else {
            return redirect()->back()->with('error',"Product not found in the cart");
        }

    }



}
