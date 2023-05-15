<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lamian</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/af6aba113a.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ mix('js/app.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body class="antialiased simplebar">
@include('mainNav')

<div class=" relative z-0">

    @php
        $allProducts = App\Models\Product::all();
        $categories = App\Models\Product::pluck('category')->unique();
    @endphp

    <div class="flex gap-2 overflow-x-scroll">
        @foreach ($categories as $category)
            @php
                $product = App\Models\Product::where('category', $category)->first();
            @endphp

            @include('top-slide')
        @endforeach
    </div>


    <div class="prose"><h1 class="m-3 mb-5">Our Menu</h1></div>
    <div
        class="product-container grid overflow-clip place-items-center align-middle grid-cols-1 md:grid-cols-4 lg:grid-cols-auto gap-5">
        @foreach ($allProducts as $product)
            @include('food-slide')
        @endforeach
    </div>


</div>
</body>

</html>
