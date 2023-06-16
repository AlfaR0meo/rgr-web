<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller {
    public function get() {
        return view('admin/pages');
    }
}
