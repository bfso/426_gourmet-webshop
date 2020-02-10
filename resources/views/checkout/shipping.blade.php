@extends('layouts.layout')

@section('header')
    @component('layouts.partials.header')
        @slot('title')
            Checkout
        @endslot
        @slot('text')
            <h2>Shipping</h2>
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif
            @if (\Session::has('error'))
                <div class="alert alert-error">
                    <ul>
                        <li>{!! \Session::get('error') !!}</li>
                    </ul>
                </div>
            @endif
            <form method="post" action="{{route('checkout.ship')}}">
                @csrf
                <div class="form-group">
                    <select class="form-control" name="shipment_type">
                        @foreach($shipping_methods as $key => $shippingMethod)
                            <option value="{{$key}}">{{$shippingMethod['name']}} (CHF {{$shippingMethod['price']}})</option>
                        @endforeach
                    </select>
                    <input class="form-control" name=shipment_date" type="date">
                    <br>
                    <input class="btn btn-primary" type="submit">
                </div>
            </form>
        </div>
    </div>
@endsection
