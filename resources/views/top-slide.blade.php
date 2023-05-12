@php
    $prodNum = isset($prodNum) ? $prodNum : 1;
    $nameProd = isset($nameProd) ? $nameProd : "Prod";
    $prodDesc = isset($prodDesc) ? $prodDesc : "Initial Description";
@endphp

<div class="card m-3 max-w-xs sm:min-h-[230px] sm:min-w-[180px] min-h-[165px] min-w-[130px] max-h-[116px] bg-base-100 shadow-xl image-full inline-block overflow-clip">
    <figure class="w-full h-56">
        <img src="{{ asset('images/dummy.png') }}" class="object-cover w-full h-full" />
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
