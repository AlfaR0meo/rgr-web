<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;
use App\Http\Requests\LoginFormRequest;
use App\Models\Order;

class LoginController extends Controller {

    public function get() {
        $isAdmin = session("isAdmin");
        $login = session("login");
        if (session("isAdmin") == true) {
            $orders = Order::getOrders();
            return view('admin/orders', compact('orders', 'isAdmin', 'login'));
        }
        return view('admin/login', compact('isAdmin', 'login'));
    }

    public function post(LoginFormRequest $request) {
        $admin = Admin::Where(['login' => $request->input('login'), 'password' => $request->input('password')]);
        if ($admin->count() == 0) {
            $warning = "Wrong login or password";
            $isAdmin = session("isAdmin");
            dd($admin);
            return view('admin/login', compact('warning', 'isAdmin'));
        } else {
            session(["isAdmin" => true]);
            session(["login" => $request->input('login')]);
            $isAdmin = session("isAdmin");
            $login = session("login");
            $orders = Order::getOrders();
            return view('admin/orders', compact('orders', 'isAdmin', 'login'));
        }
    }

    public function logout() {
        session(["isAdmin" => null]);
        session(["login" => null]);
        return view("home");
    }

}
