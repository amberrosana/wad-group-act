<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function showAllProducts()
    {
        $products = Product::all();

        return view('products', compact('products'));
    }

    public function getUsers(Request $request)
    {
        $product = Product::with('users')->find($request->id);

        return view('product-users', compact('product'));
    }
}
