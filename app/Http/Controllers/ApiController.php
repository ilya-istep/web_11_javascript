<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    public function loginAction(Request $request){
        // return '123';

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = Auth::user();

            $token = $user->createToken('token');

            return ['token' => $token->plainTextToken];
        }
    }
}
