<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Lamian</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/af6aba113a.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js')}}"></script>
</head>

<body class="antialiased">
    @include('navbar')
    @include('categories')

    <div class="flex gap-2 overflow-clip">
    @foreach (App\Models\Product::all() as $product)
        @include('top-slide', [
            'prodNum' => $loop->iteration,
            'nameProd' => $product->name,
            'prodDesc' => $product->description
        ])
    @endforeach
</div>


    <div class="prose"><h1 class="m-3 mb-5">Chicken Wings</h1></div>
    @php
        $chickenWings = ['Prod', 'Prod', 'prod'];
        $imageSrc = ['https://pos-en-node.oss-us-east-1.aliyuncs.com/%7B9F3C77F5-EA12-11EC-A6E3-44456F0161B7%7D/res_main4.jpg?x-oss-process=image%2Fauto-orient%2C1%2Fresize%2Cm_fill%2Cw_750%2Ch_320%2Fquality%2Cq_90%2Fformat%2Cjpg&ts=1683631598',
        'https://pos-en-node.oss-us-east-1.aliyuncs.com/%7B9F3C77F5-EA12-11EC-A6E3-44456F0161B7%7D/res_main1.jpg?x-oss-process=image%2Fauto-orient%2C1%2Fresize%2Cm_fill%2Cw_750%2Ch_320%2Fquality%2Cq_90%2Fformat%2Cjpg&ts=1683631598',
        'https://pos-en-node.oss-us-east-1.aliyuncs.com/%7B9F3C77F5-EA12-11EC-A6E3-44456F0161B7%7D/res_main3.jpg?x-oss-process=image%2Fauto-orient%2C1%2Fresize%2Cm_fill%2Cw_750%2Ch_320%2Fquality%2Cq_90%2Fformat%2Cjpg&ts=1683631598'
    ];
    @endphp

    <div class="flex gap-2 overflow-clip m-3">
        @foreach ($chickenWings as $index => $name)
            @include('food-slide', 
            ['prodName' => $name,
            'prodValue' => $index,
            'prodImage' => $imageSrc[$index]
            ])
        @endforeach
    </div>



    <div class="test"></div>
</body>

</html>