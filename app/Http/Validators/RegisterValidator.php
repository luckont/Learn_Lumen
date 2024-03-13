<?php

namespace App\Http\Validators;

use Illuminate\Support\Facades\Validator;

class RegisterValidator
{
    public static function validateForm(array $data)
    {
        $validator = Validator::make($data, [
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required|string|min:6',
            'email'    => 'required|string|email|max:255',
        ]);
        return $validator->validate();
    }
}
