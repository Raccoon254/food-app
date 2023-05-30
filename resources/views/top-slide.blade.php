<div class="card m-2 max-w-[200px] min-h-[200px] min-w-[65px] max-w-[70px] max-h-[85px] min-h-[80px] sm:min-w-[160px] bg-base-100 shadow-lg image-full inline-block overflow-clip">
    <figure class="w-full">
        <img src="{{ asset('storage/images/prod_'.$product->name.'.jpg') }}" class="object-cover w-full h-full" />
    </figure>
    <div class="p-2 card-body flex flex-col justify-between">
        <div class="flex justify-between">
            <h2 class="card-title text-xs">{{ $product->id }}</h2>
            <h2 class="card-title data text-xs overflow-hidden ellipsis-mobile md:overflow-visible md:-webkit-line-clamp-none md:-webkit-box-orient-initial">
                {{ $product->name }}
            </h2>
        </div>
        <div class="hidden sm:flex data text-xs">
            {{ $product->description }}
        </div>
    </div>
</div>
