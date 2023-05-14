<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function store(Request $request)
    {

        // Print request data
        // dd($request->all());
        // Create the product without the image
        $product = new Product;
        $product->name = $request->input('product_name');
        $product->description = $request->input('product_description');
        $product->category = $request->input('product_category');
        $product->price = $request->input('product_price');
        $product->save();

        // Now that we have an id, save the image
        if ($request->hasFile('product_image')) {
            $path = $request->file('product_image')->storeAs(
                'public/images', 'prod_'.$product->name.'.jpg'
            );

            // Update the product with the image path
            $product->image = $path;
            $product->save();
        }

        return redirect('/'); // Redirect to homepage after successful submission
    }

    public function getByCategory(Request $request)
    {
        $category = $request->input('category');
        $products = Product::where('category', $category)->get();

        return view('product_partial', ['products' => $products]);
    }

    public function getAll()
    {
        $products = Product::all();

        return view('product_partial', ['products' => $products]);
    }

    public function getByCategoryAndIndex(Request $request)
    {
        $category = $request->input('category');
        $index = $request->input('index');

        $product = Product::where('category', $category)->skip($index)->first();

        return view('top-slide', [
            'prodNum' => $index + 1,
            'nameProd' => $category,
            'prodDesc' => $product->description,
            'prodImage' => $product->image,
            'prodPrice' => $product->price
        ]);
    }






}
