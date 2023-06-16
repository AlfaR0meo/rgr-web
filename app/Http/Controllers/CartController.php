<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Http\Requests\OrderFormRequest;

class CartController extends Controller {
    public function get() {
        return view('cart');
    }

    public function getProducts() {
        return json_encode(Product::all());
    }

    public function post(OrderFormRequest $request) {
        $order = new Order();
        $order->fullname = $request->input("fullname");
        $order->phone = $request->input("phone");
        $order->product_ids = $request->input("product_ids");
        $order->delivery_method = $request->input("delivery_method");
        $order->payment_method = $request->input("payment_method");
        $order->save();

        return view('cart');
    }
}
