<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Order;

class OrdersController extends Controller {
    public function get() {
        $orders = Order::getOrders();
        $isAdmin = session("isAdmin");
        $login = session("login");
        return view('admin/orders', compact('orders', 'isAdmin', 'login'));
    }

    public function testOrders() {
        return json_encode(Order::getOrders());
    }
}