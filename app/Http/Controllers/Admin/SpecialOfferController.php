<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SpecialOffer;
use App\Http\Requests\SpecialOfferFormRequest;
class SpecialOfferController extends Controller {
    public function get() {
        $special_offer = SpecialOffer::all();

        return view('admin/special', compact("special_offer"));
    }

    public function post(SpecialOfferFormRequest $request) {
        $special_offer = new SpecialOffer();

        $special_offer->title = $request->input('title');
        $special_offer->text = $request->input('text');

        $special_offer->save();
        
        $file = $request->file('image');
        if ($file != null) {
            $filename = $special_offer->id . "." . $request->file('image')->extension();
            $special_offer->image_path = "/img/special_offers/" . $filename;
            $file->storeAs("img/special_offers", $filename);

            $special_offer->save();
        }

        $special_offer = SpecialOffer::all();
        return view('admin/special', compact('special_offer'));
    }
}
