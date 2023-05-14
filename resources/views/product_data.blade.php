@foreach ($products as $product)
    @include('food-slide',
            ['prodName' => $product->name,
            'prodValue' => $product->price,
            ])
@endforeach
