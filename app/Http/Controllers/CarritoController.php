<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class CarritoController extends Controller
{
    public function carrito() {
        $carrito = session()->get('carrito', []);
        $productos = Game::with('bg_classes', 'platforms')->whereIn('juego_id', $carrito)->get();
        return view('compras.carrito', [
            'productos' => $productos,
        ]);
    }

    public function agregarAlCarrito(Request $request, int $id) {
        $carrito = session()->get('carrito', []);

        if(empty($carrito)) {
            $carrito = [];
        }

        if(!in_array($id, $carrito)) {
            $carrito[] = $id;
        }
        
        session()->put('carrito', $carrito);

        return to_route('games.all');
    }
}
