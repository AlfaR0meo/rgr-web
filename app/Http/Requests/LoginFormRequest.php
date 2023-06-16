<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginFormRequest extends FormRequest {
    public function rules(): array {
        return [
            "login" => "required",
            "password" => "required"
        ];
    }

    public function attributes() {
        return [
            "login" => "login",
            "password" => "password",
        ];
    }

    public function messages() {
        return [
            'required' => 'skipped_:attribute.',
        ];
    }
}
