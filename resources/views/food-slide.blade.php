    <div class=" w-11/12 sm:w-72 mb-5 card bg-base-100 shadow-xl">
        <div class="relative card">
            <figure><img style="width: 100%; object-fit: cover; height: 250px;" src="{{ asset('storage/images/prod_'.$product->name.'.jpg') }}" alt="{{ $product->name }}" /></figure>
            <span class="absolute top-0 right-0 m-3"> <div class="badge badge-outline bg-warning text-slate-100">{{$product->price}} </div> </span>
        </div>
        <div class="card-body m-3 p-0">
            <div class="flex m-0 p-0 place-items-center">
                <div class="w-8/12 flex flex-col">
                    <div class="flex place-items-center">

                        <h2 class="card-title data mr-1" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                            {{ $product->name }}
                        </h2>

                        <div class="badge badge-secondary data">NEW</div>

                    </div>

                    <p class="text-sm data">{{$product->description}}</p>

                    <div class="bottom flex flex-col">
                        <div class="current-price">{{$product->price}}</div>
                    </div>

                </div>

                <div class="w-4/12">
                    <button onclick="addToCart({{ $product->id }})" class="w-full btn btn-warning btn-outline rounded-full ring-2 ring-blue-500 ring-inset data">Order</button>
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

        function addToCart(productId) {
            fetch('/add-to-cart', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                body: JSON.stringify({ productId: productId })
            })
                .then(response => response.json())
                .then(cart => {
                    //console.log(cart);
                    updateCartUI(cart);
                });
        }

        function updateCartUI(cart) {
            const cartCount = Object.values(cart).reduce((total, item) => total + item.quantity, 0);
            const cartSubtotal = Object.values(cart).reduce((total, item) => total + (item.price * item.quantity), 0);

            document.getElementById('cartCount').innerText = cartCount;
            document.getElementById('cartItems').innerText = `${cartCount} Items`;
            document.getElementById('cartSubtotal').innerText = `Subtotal: $${cartSubtotal}`;
        }
    </script>




