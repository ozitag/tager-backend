<?php


namespace App\Http\Requests\Api\Guest\auth;
use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'email' => 'string|required',
            'password' => 'string|required'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'email is required',
            'password.required'  => 'Password is required',
        ];
    }
}
