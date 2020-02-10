<?php
namespace App\Shop\Cart;

use App\CartItem;

class Cart{
    public function items(){
        return CartItem::with('product')->get();
    }

    public function price(){
        $items = $this->items();
        return $items->sum(function ($item){
            return $item->count * $item->product->price;
        });
    }

    public function count(){
        return CartItem::with('product')->get()->count();
    }
}
