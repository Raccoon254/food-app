@php
    $prodNum = isset($prodNum) ? $prodNum : 1;
    $nameProd = isset($nameProd) ? $nameProd : "Prod";
    $prodDesc = isset($prodDesc) ? $prodDesc : "Initial Description";
    $prodImage = isset($prodImage) ? $prodImage : "null";
    $prodPrice = isset($prodPrice) ? $prodPrice : "0";
@endphp
<div class="card m-3 sm:max-w-[200px] sm:min-h-[230px] min-w-[140px] max-w-[150px] max-h-[200px] min-h-[180px] sm:min-w-[180px] bg-base-100 shadow-xl image-full inline-block overflow-clip">
    <figure class="w-full h-56">
        <img src="{{ asset('storage/images/prod_'.$product->name.'.jpg') }}" class="object-cover w-full h-full" />
    </figure>
    <div class="p-2 card-body flex flex-col justify-between">
        <div class="flex justify-between">
            <h2 class="card-title">No {{ $prodNum }}</h2>
            <h2 class="card-title">{{ $nameProd }}</h2>
        </div>
        <div class="hidden sm:flex">
            {{ $prodDesc }}
        </div>
    </div>
</div>
