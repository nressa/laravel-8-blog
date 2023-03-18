<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\API\Auth\LoginRequest;

class LoginUserController extends Controller
{
    
    public function submit(LoginRequest $request)
    {   

        return [
            'status' => 200,
            'user' => Auth::user()
        ];
    }
}