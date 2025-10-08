<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function show() {
        return view('auth.login.show');
    }

    public function process(Request $request) {

        // VALIDAR!!!!!!!!!

        // Para la autenticación Laravel nos va a pedir que le pasemos las "credenciales"
        // Por "credenciales" laravel se refiere a que tiene que ser un array asociativo de al menos 2 claves.
        // 1. password. Que contenga el password para la autenticación.
        // 2. Uno o más campos que sirvan para buscar al usuario en la DB.
        // Esto último implica que si le pasamos un campo email, va a buscar en Eloquent o la tabla
        // al usuario con el campo "email".
        // Si le pasamos "username", buscará por "username".
        // También le podemos pasar combinaciones como "eamil" y "enabled", si queremos verificar
        // que sea un usario habilitado y no uno baneado. 
        $credenciales = $request->only(['email', 'password']);

        // Para hacer la autenticación usamos la clase "Auth" de Laravel.
        // La podemos obtener con la clase Auth
        // o con la función helper "auth()".

        // Dentro de los métodos de Auth, tenemos "attempt()" que recibe las credenciales 
        // y retorna true o false dependiendo de si el usuario se autenticó. 
        if(Auth::attempt($credenciales)) {
            return to_route('adminJuegos')
            ->with('feedback.message', 'Hola Admin!');
        } 

        // Redireccionamos al usuario al form del que venimos usando la función back().
        return back(fallback: route('auth.login.show'))
            ->withInput()
            ->with('feedback.message', 'Las credenciales no coinciden');

    }
}
