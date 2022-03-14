<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = \App\Models\Product::all();

        return view('home', compact('products'));
    }

    public function view(Product $product)
    {
        return view('product', compact('product'));
    }
}
