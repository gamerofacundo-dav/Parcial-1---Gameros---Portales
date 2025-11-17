<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function adminUsers() {
        return view('users.adminUsuarios', [
            'usuarios' => User::all()
        ]);
    }

    public function compras(int $id) {
        return view('users.compras', [
            // Gracias nico dandome una mano ahi para traer las 2 rleaciones juntas!!!!!
            'usuario' => User::with('buys.products')->findOrFail($id)
        ]);
    }

    public function edit(int $id) {
        return view('users.edit', [
            'usuario' => User::findOrFail($id),
        ]);
    }

    public function update(Request $request, int $id) {
        $request->validate([
        'name' => 'required|min:5|max:255',
        'email' => 'required|min:5|max:255',
      ],
      [
        'name.required' => 'El nombre es obligatorio',
        'name.min' => 'El nombre debe tener más de 5 caracteres',
        'name.max' => 'El nombre no debe tener más de 255 caracteres', 
        'email.required' => 'El email es obligatorio',
        'email.min' => 'El email debe tener más de 5 caracteres',
        'email.max' => 'El email no debe tener más de 255 caracteres',
      ]);

      $data = $request->only(['name', 'email']);

      
      $user = User::findOrFail($id);
      $user->update($data);

      return to_route('users.adminUsuarios')
        ->with('feedback.message', 'El usuario <b>' . e($data['name']) . '</b> se editó con éxito.');
    }
}
