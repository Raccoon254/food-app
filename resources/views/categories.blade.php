@php
    $categories= isset($categories) ? $categories : "Category";
    $categoryNumber = 1;
@endphp

<div class="navbar bg-base-100">
<div class="flex justify-between mx-1 mr-0 w-full">
    <div class="left">
        <div class="hidden sm:flex">
            <div class="flex-1">
                <a class="btn btn-ghost normal-case text-xl">Lamian</a>
                <ul class="menu menu-horizontal px-1">

                    <li><a href="#" class="all-products-link data">All Products</a></li>
                    <!-- loop over categories -->
                    @foreach ($categories as $category)
                        <li><a href="#" class="category-link data" data-category="{{ $category }}">{{ $category }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>


        <div class="dropdown dropdown-right sm:hidden" x-data="{ open: false }">
            <label @click="open = !open" tabindex="0" class="btn btn-ghost btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" /></svg>
            </label>
            <ul tabindex="0" x-show="open" class="menu dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-60" @click.away="open = false">
                @foreach ($categories as $category)
                    <li>
                        <a href="#" class="m-0 category-link" data-category="{{ $category }}">
                            <span class="btn btn-circle avatar border-warning ring-2 ring-blue-500 ring-inset">
                                <span class="text-2xl">{{$categoryNumber++}}</span>
                            </span>
                            {{$category}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="flex">
        <a href="./addProd" class="btn btn-circle btn-outline ring-2 ring-blue-500 ring-inset hover:btn-warning">
            <i class="fa-solid fa-plus text-3xl"></i>
        </a>
        <div class="flex-none mr-1">
            <div class="dropdown dropdown-end">
                <div class="dropdown dropdown-end">
                    <label tabindex="0" class="btn btn-ghost btn-warning btn-outline border-warning btn-circle ring-blue-500 ring-2 mx-2">
                        <div class="indicator flex place-items-center justify-center">
                            <i class="fa-solid fa-shopping-cart text-2xl"></i>
                            <span id="cartCount" class="badge badge-sm indicator-item">0</span>
                        </div>
                    </label>
                    <div tabindex="0" class="mt-3 card card-compact dropdown-content w-52 bg-base-100 shadow">
                        <div class="card-body">
                            <span id="cartItems" class="font-bold text-lg data">0 Items</span>
                            <span id="cartSubtotal" class="text-info data">Subtotal: $0</span>
                            <div class="card-actions">
                                <a href="/cart" class="btn btn-primary btn-block data">View cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

  </div>

<script>
    window.onload = function() {
        fetch('/cartData')
            .then(response => response.json())
            .then(cart => {
                updateCartUI(cart);
            });
    };
    function updateCartUI(cart) {
        const cartCount = Object.values(cart).reduce((total, item) => total + item.quantity, 0);
        const cartSubtotal = Object.values(cart).reduce((total, item) => total + (item.price * item.quantity), 0);

        document.getElementById('cartCount').innerText = cartCount;
        document.getElementById('cartItems').innerText = `${cartCount} Items`;
        document.getElementById('cartSubtotal').innerText = `Subtotal: $${cartSubtotal}`;
    }
</script>
