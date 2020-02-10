<?php

namespace App\Http\Controllers;

use App\Shop\Cart\Cart;
use App\Shop\Shipping\Shipping;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function shipment(Cart $cart) {
        $shippingMethods = [
            'train_station_pickup'=> ['price'=>0,'name'=>'Abholung in userer Filiale am Bahnhof'],
            'main_storage_pickup'=> ['price'=>0,'name'=>'Abholung in userem Lager'],
            'a_post'=> ['price'=>20,'name'=>'Versand per A-Post'],
            'b_post'=> ['price'=>10,'name'=>'Versand per B-Post'],
        ];
        return view('checkout.shipping',['shipping_methods'=>$shippingMethods]);
    }

    public function ship(Request $request,Cart $cart){
        $success = false;

        $shippingMethod = new Shipping();

        if($request->shipment_type == 'train_station_pickup'){
            $success = $shippingMethod->pickUpAtTrainStationStore();
        }
        if($request->shipment_type == 'main_storage_pickup'){
            $success = $shippingMethod->pickUpAtMainStorage();
        }
        if($request->shipment_type == 'a_post'){
            if($cart->price() > 50){
                $success = $shippingMethod->aPost();
            }
        }
        if($request->shipment_type == 'b_post'){
            if($cart->price() > 50){
                $success = $shippingMethod->bPost();
            }
        }

        if($success == true){
            return back()->with('success', __('The shipping method is successfully set'));
        }else{
            return back()->with('error', __('Failure with shipment method '.$request->shipment_type));
        }
    }
}
