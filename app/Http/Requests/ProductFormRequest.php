<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest {
    public function rules(): array {
        return [
            "nickname" => "required",
            "email" => ['regex:/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/', 'required'],
            "phone_number" => ['regex:/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im', "required"],
            "date" => ['required', 'regex:/^d{4}\.(0[1-9]|1[012])\.(0[1-9]|[12][0-9]|3[01])$/'],
            "feedback" => "required",
        ];
    }

    public function attributes() {
        return [
            "nickname" => "Имя",
            "email" => 'Email',
            "phone_number" => "Телефон",
            "date" => 'Дата',
            "feedback" => "Содержание",
        ];
    }

    public function messages() {
        return [
            'required' => 'Вы пропустили поле :attribute.',
            'regex' => 'Неверный формат поля :attribute.',
        ];
    }
}
