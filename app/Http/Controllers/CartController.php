<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request){
        $product = Product::where('id',$request->product_id)->first();
        
        // @todo add product in the table cart_item
        return back()->with('success', __('The product was successfully added to the cart'));
    }
}
