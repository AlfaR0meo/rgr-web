<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpecialOfferController extends Controller {
    public function get() {
        return view('admin/special');
    }
}
