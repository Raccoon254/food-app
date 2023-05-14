<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class CartController extends Controller
{
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function add(Request $request): \Illuminate\Http\JsonResponse
    {
        $productId = $request->input('productId');
        $product = Product::find($productId);

        $cart = session()->get('cart', []);
        if(isset($cart[$productId])) {
            $cart[$productId]['quantity']++;
        } else {
            $cart[$productId] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1
            ];
        }

        session()->put('cart', $cart);

        return response()->json($cart);
    }
    public function index(Request $request)
    {
        $cart = $request->session()->get('cart', []);

        return view('cart', compact('cart'));
    }

    public function data(): \Illuminate\Http\JsonResponse
    {
        $cart = Session::get('cart', []);
        return response()->json($cart);
    }


    public function increment($productId): \Illuminate\Http\RedirectResponse
    {
        $cart = Session::get('cart', []);
        $cart[$productId]['quantity']++;
        Session::put('cart', $cart);
        return Redirect::back();
    }

    public function decrement($productId): \Illuminate\Http\RedirectResponse
    {
        $cart = Session::get('cart', []);
        if ($cart[$productId]['quantity'] > 1) {
            $cart[$productId]['quantity']--;
        }
        Session::put('cart', $cart);
        return Redirect::back();
    }
}

