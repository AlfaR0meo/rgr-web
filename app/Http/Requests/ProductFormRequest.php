<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest {
    public function rules(): array {
        return [
            "name" => "required",
            "text" => "required",
            "image" => "required",
            "cost" => ["required", 'regex:/\d+.\d\d/'],
        ];
    }

    public function attributes() {
        return [
            "name" => "name",
            "text" => "text",
            "image" => "image",
            "cost" => "cost",
        ];
    }

    public function messages() {
        return [
            'required' => 'skipped_:attribute.',
            'regex' => 'format_violated_:attribute.',
        ];
    }
}
