@php
  $prodName = isset($prodName) ? $prodName : "Prod";
  $prodValue = isset($prodValue) ? $prodValue+1 : 1;
  $prodImage = isset($prodImage) ? $prodImage : "https://arkadiikur.ru/static/thumbs/71/e2/640x640_2_normal_cbf290aed2d19dd5f7ba3ad828c4.jpg";
@endphp

<div style="width: 350px" class="card bg-base-100 shadow-xl">
    <div class="relative card">
        <figure><img style="width: 100%; object-fit: cover; height: 250px; " src="{{ $prodImage }}" alt="Shoes" /></figure>
        <span class="absolute top-0 right-0 m-3"><div class="badge badge-outline bg-warning text-slate-100">29.00 ₽</div></span>
    </div>
    <div class="card-body">
      <h2 class="card-title">
        {{ $prodName }} {{ $prodValue }}
        <div class="badge badge-secondary">NEW</div>
      </h2>
      <p class="text-sm">Tender pieces of chicken fillet</p>
      <div class="bottom flex justify-between">
          <div class="badge badge-outline">25.00 ₽</div>
          <button class="btn btn-warning btn-outline rounded-full">Order &nbsp;<i class="fa-solid fa-plus"></i></button>
      </div>
    </div>
</div>
