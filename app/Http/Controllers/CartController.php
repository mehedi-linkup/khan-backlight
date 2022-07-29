<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Darryldecode\Cart\Cart;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{ 
    public function index()
    {
        $cartItems = \Cart::getContent();
        return view('pages.website.cart', compact('cartItems'));
    }

    public function store(Request $request)
    {
        try {
            $product = Product::where('id',$request->id)->first();
            $id = $product->id;
        \Cart::add([
            'id' => $id,
            'name' =>$product->name,
            'price' => $product->rate,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $product->image,
            ),
            'associatedModel' => $product
        ]);  
        // Session::flash('success', 'Cart Added Successfully');
        return redirect()->back()->with('success', 'Cart Added Successfully');
        } catch (\Throwable $th) {
        // Session::flash('error', 'Cart Added Failed');
        throw $th;
        // return redirect()->back();
        }
        
    }
    public function cartRemove($id) {
        \Cart::remove($id);
        return redirect()->back()->with('success', 'Cart Removed Successfully!');
    }
    
}
