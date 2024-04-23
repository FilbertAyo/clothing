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

        $cart = session()->get('cart',[]);

        $totalPrice = collect($cart)->sum(function($item){
            return $item['price']*$item['quantity'];
        });
//    $totalPrice = Cache::get('totalPrice');

        return view('layout.cart',compact('totalPrice'));
    }

    public function deleteProduct(Request $request){

        $productId = $request->input('product_id');

        $cart = session()->get('cart',[]);

        if(isset($cart[$productId])){
            unset($cart[$productId]);

            $totalPrice = collect($cart)->sum(function($item){
                return $item['price']*$item['quantity'];
            });

            session()->put('cart',$cart);
            session()->put('totalPrice',$totalPrice);

            return redirect()->back()->with('success',"product has been removed from the cart");
        }else{
            return redirect()->back()->with('success',"product not found in the cart");
        }

    }



}
