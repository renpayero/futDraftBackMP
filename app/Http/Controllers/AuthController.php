<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroRequest;
use Illuminate\Http\Request;
use App\Models\User;


class AuthController extends Controller
{
    public function register(RegistroRequest $request){
        $data = $request->validated();
        // crear el usuario
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);
        return [
            'token' => $user->createToken('token')->plainTextToken,
            'user' => $user
        ];
    }
    public function login(Request $request){

    }
    public function logout(Request $request){

    }
}
