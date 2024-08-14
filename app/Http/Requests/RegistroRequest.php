<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password as PasswordRules;

class RegistroRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [ 
            'name' => ['required' , 'string'],
            'email' => ['required' , 'email', 'unique:users,email'],
            'password' => [
                'required',
                'confirmed',
                PasswordRules::min(8)->letters()->numbers()
            ]
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'El nombre es requerido. ',
            'email.required' => 'El email es requerido. ',
            'email.email' => 'El email no es valido. ',
            'email.unique' => 'El email ya esta registrado. ',
            'password.required' => 'La contraseña es requerida. ',
            'password.confirmed' => 'Las contraseñas no coinciden. ',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres. ',
            'password.letters' => 'La contraseña debe tener al menos una letra. ',
            'password.numbers' => 'La contraseña debe tener al menos un numero. ',
            'password.symbols' => 'La contraseña debe tener al menos un simbolo. '
        ];
    }
}
