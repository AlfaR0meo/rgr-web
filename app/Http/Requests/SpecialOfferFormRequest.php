<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SpecialOfferFormRequest extends FormRequest{
    public function rules(): array {
        return [
            "title" => "required",
            "text" => "required",
            "image" => "required"
        ];
    }

    public function attributes() {
        return [
            "title" => "title",
            "text" => "text",
            "image" => "image"
        ];
    }

    public function messages() {
        return [
            'required' => 'skipped_:attribute.',
        ];
    }
}