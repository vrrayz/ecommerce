<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    //
    public function addToCart(Request $request){
        // dd($request->all());
        Cart::create([
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
            'total' => $request->quantity * Product::find($request->product_id)->price
        ]);
        return back()->with('success','Item added to cart successfully');
    }
}
