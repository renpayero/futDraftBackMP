<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistroRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
    public function login(LoginRequest $request){
        $data = $request->validated();
        
        //revisar el password
        if(!Auth::attempt($data)){
            return response([
                'errors' => ['El email o la contraseña son incorrectos']
            ], 422);
        }
        // autenticar usuario
        $user = Auth::user();
        return [
            'token' => $user->createToken('token')->plainTextToken,
            'user' => $user
        ];
    }
    public function logout(Request $request){
        $user = $request->user();
        $user->currentAccessToken()->delete();
        return response([
            'user' => 'Sesión cerrada'
        ]);
    }
}
