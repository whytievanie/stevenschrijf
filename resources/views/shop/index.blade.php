<div class="row">
    <div class="col-md-12">
        @foreach($products as $item => $product)
            {{$product->price}}
            <a href="{{route('cart.add',$product)}}">Add to card</a>
        @endforeach
    </div>
</div>

@forelse($cart as $items)
    <p>{{ $items->product_id }}</p>
@empty
    <p>No items</p>
@endforelse