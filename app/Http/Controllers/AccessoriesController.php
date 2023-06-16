<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccessoriesController extends Controller {
    public function get() {
        return view('accessories');
    }
}
