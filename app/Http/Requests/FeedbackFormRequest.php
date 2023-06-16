<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackFormRequest extends FormRequest {
    public function rules(): array {
        return [
            "email" => ['regex:/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/', 'required'],
            "phone" => 'regex:/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im',
            "message" => "required",
        ];
    }

    public function attributes() {
        return [
            "phone" => "phone",
            "email" => 'email',
            "message" => "message",
        ];
    }

    public function messages() {
        return [
            'required' => 'skipped_:attribute.',
            'regex' => 'format_violated_:attribute.',
        ];
    }
}
