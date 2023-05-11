@php
  $prodNum = isset($prodNum) ? $prodNum : 1;
  $nameProd = isset($nameProd) ? $nameProd : "Prod";
  $prodDesc = isset($prodDesc) ? $prodDesc : "Initial Description";
@endphp

<div style="width: 200px; height: 250px;" class="card m-3 max-w-xs max-h-full bg-base-100 shadow-xl image-full inline-block overflow-clip">
    <figure><img src="{{ asset('images/dummy.png') }}" /></figure>
    <div class="p-2 card-body flex flex-col justify-between">
        <div class="flex justify-between">
            <h2 class="card-title">No {{ $prodNum }}</h2>
            <h2 class="card-title">{{ $nameProd }}</h2>
        </div>
      <div class="">
        {{ $prodDesc }}
      </div>
    </div>
</div>

  
  