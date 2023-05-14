
<!doctype html>
<html lang="en">
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
<div class=" w-full grid grid-cols-1 sm:grid-cols-2 gap-4 text-white text-sm leading-6 bg-stripes-fuchsia rounded-lg">

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
            <th><a href="" class="btn btn-ghost"><i class="fa-solid fa-trash"></i></a></th>
        </tr>
        </thead>
        <tbody>
        <!-- row -->
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
                <a href="" class="btn btn-ghost"><i class="fa-solid fa-trash"></i></a>
            </th>
        </tr>

        @endforeach
        <!-- End Row-->

        </tbody>
        <!-- foot -->
        @if(sizeof($cart)>=5)
            <tfoot>
            <tr>
                <th>Product</th>
                <th>
                    <div class="hidden md:block">Price</div>
                </th>
                <th>Quantity</th>
                <th><a href="" class="btn btn-ghost"><i class="fa-solid fa-trash"></i></a></th>
            </tr>
            </tfoot>
        @endif

    </table>
    <div class="wrap-actions m-4">
        <a href="" class="btn">Checkout</a>
    </div>
</div>
    <div class="rounded-lg hidden sm:flex shadow-lg bg-fuchsia-500 overflow-clip">
        <img class="rounded-lg w-full max-h-[540px] object-cover" src="https://pos-en-node.oss-us-east-1.aliyuncs.com/%7B9F3C77F5-EA12-11EC-A6E3-44456F0161B7%7D/res_main4.jpg?x-oss-process=image%2Fauto-orient%2C1%2Fresize%2Cm_fill%2Cw_750%2Ch_320%2Fquality%2Cq_90%2Fformat%2Cjpg&ts=1683631598" alt="">
    </div>
</div>

</body>
</html>
