<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FeedbackFormRequest;
use App\Models\Feedback;

class FeedbackController extends Controller {
    public function get() {
        return view('feedback');
    }

    public function post(FeedbackFormRequest $request) {
        $feedback = new Feedback();
        $feedback->fullname = $request->input("fullname");
        $feedback->phone = $request->input("phone");
        $feedback->email = $request->input("email");
        $feedback->message = $request->input("message");
        $feedback->save();
        dd($feedback);

        return view('feedback');
    }
}
