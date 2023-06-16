<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderFormRequest extends FormRequest {
    public function rules(): array {
        return [
            "product_ids" => ['required', "regex:/\d+(,\d+)*/"],
            "fullname" => "required",
            "phone" => ['regex:/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im', "required"],
            "delivery_method" => ["required", 'regex:/(pickup)|(courier)|(mail)/'],
            "payment_method" => ["required", 'regex:/(cash)|(cashless)/']
        ];
    }

    public function attributes() {
        return [
            "product_ids" => "product_ids",
            "fullname" => "fullname",
            "phone" => "phone",
            "delivery_method" => "delivery_method",
            "payment_method" => "payment_method",
        ];
    }

    public function messages() {
        return [
            'required' => 'skipped_:attribute.',
            'regex' => 'format_violated_:attribute.',
        ];
    }
}
