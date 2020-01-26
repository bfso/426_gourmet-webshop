@extends('layouts.layout')

@section('header')
    @component('layouts.partials.header')
        @slot('title')
            {{$product->name}}
        @endslot
        @slot('text')
            {{$product->description}}
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

            <div class="col">
            </div>
            <div class="col">
                <i>{{$product->sku}}</i><br>
                @lang('products.in_stock'): {{$product->storage}}<br>
                <h3>CHF {{$product->price}}</h3>

                <form method="POST" action="{{route('cart.add')}}">
                    <div class="form-group">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <label for="item_count">@lang("products.count"):</label><input type="number" class="form-control" name="item_count" value="1">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="@lang('Add to card')">
                    </div>
                </form>

                <p>
                    <br>
                    <a href="{{route('products.index')}}">@lang('Return to product overview')</a>
                </p>
            </div>
        </div>
    </div>
@stop
