<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\SpecialOffer;

class NewsController extends Controller {
    public function get() {
        $news = News::all();
        $special_offers = SpecialOffer::all();

        return view('news', compact('news', 'special_offers'));
    }
}