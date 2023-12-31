<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller {
    public function get() {
        $products = Product::all();
        return view('products', compact('products'));
    }
}
