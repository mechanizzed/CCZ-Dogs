<?php

namespace CCZ\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UserPasswordUpdateRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'password' => 'required|min:3|confirmed',
            'password_confirmation' => 'required|min:3'
        ];
    }


}