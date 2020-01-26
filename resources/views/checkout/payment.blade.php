@extends('layouts.layout')

@section('header')
    @component('layouts.partials.header')
        @slot('title')
            Checkout
        @endslot
        @slot('text')
            <h2>Payment</h2>
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <form method="post" action="{{route('checkout.pay')}}">
                @csrf
                <div class="form-group">
                    <select class="form-control" name="payment_type">
                        <option value="paypal">PayPal</option>
                        <option value="creditcard">CreditCard</option>
                    </select>
                    <br>
                    <input class="btn btn-primary" type="submit">
                </div>
            </form>
        </div>
    </div>
@endsection
