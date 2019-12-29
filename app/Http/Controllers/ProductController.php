<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('products.index',['products'=> Product::get()]) ;
    }
    
    public function show($slug){
        $product = Product::where('slug',$slug)->first();
        return view('products.show',compact('product')) ;
    }
}
