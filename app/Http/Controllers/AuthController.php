<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function show() {
        return view('auth.login');
    }

    public function process(Request $request) {
        //Elegimos no controlar si el email existe o no en la bd porque compartimos la filosofía 
        //de brindar la menor información posible a un potencial atacante
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:5']
        ], [
            'email.required' => 'El email es obligatorio',
            'email.email' => 'Ingrese un email válido',
            'password.required' => 'La contraseña es obligatoria',
            'password.min' => 'La contraseña debe tener al menos 5 caracteres'
        ]);

        $credenciales = $request->only(['email', 'password']);

        if(Auth::attempt($validated)) {
            return to_route('home')
            ->with('feedback.message', 'Bienvenido administrador ' . Auth::user()->name);
        } 

        return back(fallback: route('auth.login.show'))
            ->withInput()
            ->with('feedback.message', 'Los datos son incorrectos')
            ->with('feedback.type', 'danger');

    }

    public function logout(Request $request) {
        Auth::logout();
        
        $request->session()->invalidate();
        
        $request->session()->regenerateToken();

        return to_route('home')
            ->with('feedback.message', 'Sesión cerrada');
    }

}
