<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
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
            ->with('feedback.message', 'Datos incorrectos')
            ->with('feedback.type', 'danger');

    }

    public function logout(Request $request) {
        Auth::logout();
        
        $request->session()->invalidate();
        
        $request->session()->regenerateToken();

        return to_route('home')
            ->with('feedback.message', 'Sesión cerrada');
    }

    public function showRegister() {
        return view('auth.register');
    }

    public function processRegister(Request $request) {
        $request->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'email', 'min:3', 'max:255'],
            'password' => ['required', 'min:5', 'max:72']
        ], [
            'name.required' => 'El nombre es obligatorio',
            'name.min' => 'El nombre debe tener al menos 3 caracteres',
            'name.max' => 'El nombre no debe tener más de 255 caracteres',
            'email.required' => 'El email es obligatorio',
            'email.email' => 'Ingrese un email válido',
            'password.required' => 'La contraseña es obligatoria',
            'password.min' => 'La contraseña debe tener al menos 5 caracteres',
            'password.max' => 'El contraseña no debe tener más de 72 caracteres'
        ]);

        if($this->checkExistingEmail($request['email'])->isNotEmpty()) {
            return back(fallback: route('auth.register'))
            ->withInput()
            ->with('feedback.message', 'El email ya existe')
            ->with('feedback.type', 'danger'); 
        }

        if($request['password'] !== $request['confirmPassword']) {
            return back(fallback: route('auth.register'))
            ->withInput()
            ->with('feedback.message', 'Las contraseñas no coinciden')
            ->with('feedback.type', 'danger'); 
        }

        $data = $request->only(['name', 'email', 'password']);

        
        $user = User::create($data);
        $dataParaPerfil = [
            'usuario_fk' => $user->id,
            'avatar' => null,
            'direccion' => null,
            'created_at' => now(),
            'updated_at' => now()
        ];
        Profile::create($dataParaPerfil);

        Auth::login($user);

        return to_route('home');
    }

    public function checkExistingEmail(string $email) {
        return User::where('email', $email)->get();
    }

}
