@extends('layouts.app')

@section('content')
    <h1>@lang('Our products')</h1>
    @foreach($products as $product)
        <a href="{{route('products.show',['slug'=>$product->slug])}}"> {{$product->name}}</a><br>
    @endforeach
@stop
