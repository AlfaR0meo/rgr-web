<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;
use App\Http\Requests\LoginFormRequest;

class LoginController extends Controller {

    public function get() {
        return view('admin/login');
    }

    public function post(LoginFormRequest $request) {
        $admin = Admin::Where(['login' => $request->input('login'), 'password' => $request->input('password')]);
        if ($admin->count() == 0) {
            $warning = "Wrong login or password";
            return view('admin/login', compact('warning'));
        } else {
            session("isAdmin", true);
            return view('admin/orders');
        }
    }

    public function logout() {
        session("isAdmin", null);
    }

}
