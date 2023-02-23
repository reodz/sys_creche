<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends BaseController
{
    public function login(Request $request){
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        $user = User::query()
            ->where('email', '=', $request->email)
            ->where('password', '=', $request->password)->first();

        if(empty($user)){
            return $this->sendError(
                'No account'
            );
        }
        else{
            $token = $user->createToken('zadcresh')->plainTextToken;

            $data = [
                'token' => $token,
                'user' => $user
            ];

            return $this->sendSuccess($data, 'Successfully');
        }
    }



    public function register(Request $request){
        $request->validate([
            'name' => ['required', 'unique:users,name'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required']
        ]);

        $user = User::query()->create($request->all());

        if(empty($user)){
            return $this->sendError('Technical error');
        }
        else{
            $token = $user->createToken('zadcresh')->plainTextToken;
            $data = [
                'token' => $token,
                'user' => $user
            ];

            return $this->sendSuccess($data, 'Successfully');
        }
    }
}
