<?php

namespace App\Http\Controllers;

use App\CartItem;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {
        return view('cart.index',['cartItems'=>CartItem::get()]);
    }

    public function add(Request $request){
        $product = Product::where('id',$request->product_id)->first();
        $cartItem = CartItem::where('product_id', $product->id)->first();

        if(!$cartItem){
            $cartItem = new CartItem();
            $cartItem->product_id = $product->id;
            $cartItem->count = $request->item_count;
            $cartItem->save();
        }else{
            $cartItem->update([
                'count'=> DB::raw('count+'.$request->item_count),
                'product_id'=> $product->id,
            ]);
        }

        return back()->with('success', __('The product was successfully added to the cart'));
    }

    public function destroy(CartItem $cartItem)
    {
        $cartItem->delete();
        return back()->with('success', __('The product was successfully removed from cart'));
    }

    public function clear()
    {

    }
}
