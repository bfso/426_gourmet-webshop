@extends('layouts.layout')

@section('header')
    @component('layouts.partials.header')
        @slot('title')
            @lang('products.products')
        @endslot
        @slot('text')
            @lang('products.overview_of_our_products')
        @endslot
    @endcomponent
@endsection

@section('content')
    <div class="container">
        @foreach($products->chunk(3) as $chunk)
            <div class="card-deck">
                @foreach($chunk as $product)
                    <div class="card">
                        {{-- <img src="..." class="card-img-top" alt="...">--}}
                        <div class="card-body">
                            <a href="{{route('products.show',['slug'=>$product->slug])}}"><h4 class="card-title">{{$product->name}}</h4></a>
                            <p class="card-text">
                                {!! Str::limit($product->description, 30, ' ..') !!}
                            </p>
                            @include('tags.cloud',['tags'=>$product->tags])
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
