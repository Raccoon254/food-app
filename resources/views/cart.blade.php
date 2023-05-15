<!doctype html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Checkout</title>
</head>
<body class="antialiased simplebar">
<div class="w-full">
    @include('mainNav')
</div>
<div class="w-full grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm leading-6 bg-stripes-fuchsia rounded-lg">

    <div class="w-full">
    <table class="table w-full">
        <!-- head -->
        <thead>
        <tr>
            <th>Product</th>
            <th>
                <div class="hidden md:block">Price</div>
            </th>
            <th>Quantity</th>
            <th><a href="{{ URL::to('/cart/clear') }}" class="btn btn-ghost"><i class="fa-solid fa-trash"></i></a>
            </th>
        </tr>
        </thead>
        <tbody>
        <!-- row -->
        @if(sizeof($cart)===0)
            <tr>
                <td>No data in cart</td>
            </tr>
        @else

        @foreach ($cart as $productId => $details)
            @php
            $prodQuantity = $details['quantity'];
            @endphp
        <tr>
            <td class="flex flex-col">
                <div class="flex items-center space-x-3">
                    <div class="avatar">
                        <div class="mask mask-squircle w-12 h-12">
                            <img src="{{ asset('storage/images/prod_'.$details['name'].'.jpg') }}" alt="" />
                        </div>
                    </div>
                    <div>
                        <div class="font-bold">{{ $details['name'] }}</div>
                            <div class="text-sm xxs">${{ $details['price'] }}</div>
                            <div class="text-sm opacity-50 xxw">{{ $details['quantity'] }}</div>

                    </div>

                </div>
            </td>
            <td>
                <div class="hidden md:block">${{ $details['price'] }}</div>
            </td>
            <th>

                <button onclick="window.location='{{ URL::to('/cart/increment/'.$productId) }}'" class="btn btn-ghost btn-xs"><i class="fa-solid fa-plus"></i></button>
                <span>{{ $details['quantity'] }}</span>
                <button onclick="window.location='{{ URL::to('/cart/decrement/'.$productId) }}'" class="btn btn-ghost btn-xs"><i class="fa-solid fa-minus"></i></button>

            </th>
            <th>
                <a href="{{ URL::to('/cart/remove/'.$productId) }}" class="btn btn-ghost"><i class="fa-solid fa-trash"></i></a>
            </th>
        </tr>

        @endforeach
        @endif
        <!-- End Row-->

        </tbody>
        <!-- foot -->
        <!--if(sizeof($cart)>=5)-->
            <tfoot>
            <tr>
                <th>
                    <a href="" class="btn btn-outline btn-warning ring-2 ring-blue-500 ring-inset rounded-full">Checkout</a>
                </th>
                <th>
                    <div class="hidden md:block">
                        @php
                            $totalItems = 0;
                            $totalPrice = 0;
                            foreach ($cart as $item) {
                                $price = floatval
                                ($item['price']);
                                $quantity = intval($item['quantity']);
                                $totalPrice += $price * $quantity;
                                $totalItems += $quantity;
                            }

                            echo "Total Price: $" . number_format($totalPrice, 2);
                        @endphp
                    </div>
                </th>
                <th>Items ={{$totalItems}}</th>
                <th><a href="" class="btn btn-ghost"><i class="fa-solid fa-trash"></i></a></th>
            </tr>
            </tfoot>
        <!--endif-->

    </table>
    </div>
    <div class="rounded-lg hidden sm:flex shadow-lg bg-fuchsia-500 overflow-clip">
        @php
            $protocol = request()->isSecure() ? 'https://' : 'http://';
            $currentUrl = url()->current();
            $baseUrl = url('/');
            $imageUrl = "";
        @endphp
        @if($baseUrl==="http://1279-197-248-106-13.ngrok-free.app")
            <img class="rounded-lg w-full max-h-full object-cover" src="{{secure_asset('images/FoodApp.jpg')}}" alt="">
        @else
            <img class="rounded-lg w-full max-h-full object-cover" src="{{asset('images/FoodApp.jpg')}}" alt="">
        @endif

    </div>
</div>

</body>
</html>
