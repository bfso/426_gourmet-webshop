@extends('layouts.app')

@section('content')
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif

    <i>{{$product->sku}}</i>
    <h1>{{$product->name}}</h1>
    <p>{{$product->description}}</p>

    <form method="POST" action="{{route('cart.add')}}">
        <input type="hidden" name="product_id" value="{{$product->id}}">
        <label for="item_count">@lang("count")</label><input type="number" name="item_count" value="1">
        <input type="submit" value="@lang('Add to card')">
        @csrf
    </form>

    <p>
        <br>
        <a href="{{route('products')}}">@lang('Return to product overview')</a>
    </p>
@stop
