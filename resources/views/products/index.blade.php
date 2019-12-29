@foreach($products as $product)
    <a href="{{route('products.show',['slug'=>$product->slug])}}"> {{$product->name}}</a><br>
@endforeach
