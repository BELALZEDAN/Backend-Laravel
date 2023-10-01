<?php

namespace App\Http\Controllers;


use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{

    public function login(Request $request)
    {

        $request->validate([
            'password' => ['required','min:6'],
            'remember' => ['boolean']
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember??false));
        {
            $user  = to_user(Auth::user());
            $token = $user->createToken('Sanctum',[])->plainTextToken;
            return response()->json([
                'user'           => new UserResource($user),
                'token'          => $token,
                'remember_token' => Auth::user()->remember_token
            ],200);
        }

        return response()->json([
            'massage' => 'username or password is incorrect. ',
            'error'   => [
                'username' => ['user or password is incorrect. ']
            ]
            ],422);
    }

    public function logout(Request $request){
        $request->validate( [
            'fall' => ['boolean'],
        ]);
        $user = to_user(Auth::user());
        if($request->fall){
            $user->tokens()->delete();
            $user->remember_token = null;
            $user->save();
        }
        else
            to_token($user->currentAccessToken())->delete();

    }
}
