<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller {
    public function get() {
        return view('cart');
    }

    public function getProducts() {
        return json_encode(Product::all());
    }
}
