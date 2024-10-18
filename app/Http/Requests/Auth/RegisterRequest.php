<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'username' => 'required|string|min:4|max:16|unique:users',
            'password' => 'required|string|min:8|max:64|confirmed',
            'password_confirmation' => 'required|string|min:8|max:64',
        ];
    }

    public function messages(): array
    {
        return [
            'username.unique' => 'Пользователь с таким логином уже существует',
        ];
    }
}
