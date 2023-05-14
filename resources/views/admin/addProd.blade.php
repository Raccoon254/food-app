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

<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-white text-sm leading-6 bg-stripes-fuchsia rounded-lg">
    <div class="p-4 rounded-lg shadow-lg">

        <div class="form p-4 sm:p-0 flex flex-col justify-center align-middle content-center w-full flex-wrap">
            <div class="prose text-center"><h2>Add a Product to the database</h2></div>
            <form class="flex flex-col w-full sm:w-8/12 gap-4 my-5" method="POST" action="/add-product" enctype="multipart/form-data">
                @csrf
                <label class="flex flex-col">
                    <input type="text" name="product_name" placeholder="Product Name" class="input input-bordered input-warning" />
                </label>
                <label class="flex flex-col">
                    <span class="text-white-100">Upload Product Picture</span>
                    <input type="file" accept="image/jpeg, image/png, image/gif" name="product_image" class="file-input file-input-bordered file-input-warning" />
                </label>
                <label class="flex flex-col">
                    <textarea class="textarea textarea-lg textarea-warning" name="product_description" placeholder="Product Description"></textarea>
                </label>
                <label class="flex flex-col">
                    <input type="text" name="product_category" placeholder="Add Category" class="input input-bordered input-warning" />
                </label>
                <label class="flex flex-col">
                    <input type="text" name="product_price" placeholder="Add Price" class="input input-bordered input-warning" />
                </label>
                <label class="flex flex-col">
                    <input type="submit" class="btn btn-outline btn-warning btn-bordered" />
                </label>
            </form>
        </div>
    </div>
    <div class="rounded-lg hidden sm:flex shadow-lg bg-fuchsia-500 overflow-clip">
        <img class="rounded-lg w-full max-h-[540px] object-cover" src="https://pos-en-node.oss-us-east-1.aliyuncs.com/%7B9F3C77F5-EA12-11EC-A6E3-44456F0161B7%7D/res_main4.jpg?x-oss-process=image%2Fauto-orient%2C1%2Fresize%2Cm_fill%2Cw_750%2Ch_320%2Fquality%2Cq_90%2Fformat%2Cjpg&ts=1683631598" alt="">
    </div>
</div>


</body>

</html>
