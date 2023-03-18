<?php

namespace App\Http\Requests\API\Auth;

use Illuminate\Support\Str;
use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\RateLimiter;
use App\Http\Requests\API\ResponseAsJsonTrait;
use Illuminate\Validation\ValidationException;

class LoginRequest extends FormRequest
{

    use ResponseAsJsonTrait;

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => ['required', 'string', 'email', 'exists:users,email'],
            'password' => ['required', 'string'],
        ];
    }

    /**
     * Get the validation message per rules
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => 'The email field is required.',
            'email.exists' => 'The email is not found.'
        ];
    }

}
