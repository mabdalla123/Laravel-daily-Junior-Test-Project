<?php

namespace App\Http\Controllers\Api\Atuh;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function __invoke(LoginRequest $request)

    {

        
        if (Auth::attempt($request->only(["email","password"]))) {
           
            $user = User::where('email', $request['email'])->first();
            //create Token
            $token = $user->createToken('Api');

            return response(
                [
                    'user' => $user,
                    'token' => $token->plainTextToken,
                ],
                200,
            );
        }

        return response(
            'User Not Found',
            404,
        );
    }
}
