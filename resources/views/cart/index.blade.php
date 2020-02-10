@extends('layouts.layout')

@section('header')
    @component('layouts.partials.header')
        @slot('title')
            @lang('cart')
        @endslot
        @slot('text')

        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container">
        @foreach($cartItems as $cartItem)
            <div class="card-deck">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{$cartItem->product->name}} ({{$cartItem->count}})</h4>
                            <p class="card-text">
                                <a href="{{route('cart.destroy',['cart_item'=>$cartItem])}}">[x]</a>
                            </p>
                        </div>
                    </div>
            </div>
        @endforeach
    </div>
@endsection
