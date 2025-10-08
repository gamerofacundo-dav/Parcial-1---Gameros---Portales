<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public static function allGames() {
      $games = Game::all();
      return view('games.all', [
        'games' => $games
      ]);
    }

    public static function firstTwoGames() {
      $games = Game::all();
      $twoGames = $games->find([1, 2]);
      
      return $twoGames;
    }

    public function gameById(int $id) {
      $game = Game::findOrFail($id);

      return view('games.details', [
        'game' => $game
      ]);
    }

    public function adminJuegos() {
      $games = Game::all();
      return view('adminJuegos', [
        'games' => $games
      ]);
    }

    public function create() {
     
      return view('games.create');
    }

    public function store(Request $request) {
      // Validamos entradas
      $request->validate([
        'titulo' => 'required|min:5|max:255',
        'fecha_lanzamiento' => 'required|before_or_equal:today|date_format:Y-m-d',
        'descripcion' => 'required|min:25',
        'precio' => 'required|numeric|min:0'
      ],
      [
        'titulo.required' => 'El título es obligatorio',
        'titulo.min' => 'El título debe tener más de 5 caracteres',
        'titulo.max' => 'El título no debe tener más de 255 caracteres', 
        'fecha_lanzamiento.required' => 'La fecha es obligatoria',
        'fecha_lanzamiento.before_or_equal' => 'La fecha debe ser hoy o anterior al día de hoy',
        'fecha_lanzamiento.date_format' => 'La fecha debe tener el formato y-m-d',
        'descripcion.required' => 'La descripción es obligatoria',
        'descripcion.min' => 'La descripción debe tener más de 25 caracteres',
        'precio.required' => 'El precio es obligatorio',
        'precio.numeric' => 'El precio debe ser un número',
        'precio.min' => 'El precio debe ser mayor a 0'
      ]);


      $data = $request->only('titulo', 'fecha_lanzamiento', 'descripcion', 'precio');

      Game::create($data);

      return to_route('adminJuegos')
        ->with('feedback.message', 'El juego <b>' . e($data['titulo']) . '</b> se creó con éxito.'); 

    }

    public function delete(int $id) {
      $game = Game::findOrFail($id);
      return view('games.delete', [
        'game' => $game
      ]);
    }

    public function destroy(int $id) {
      $game = Game::findOrFail($id);
      $game->delete();

      return to_route('adminJuegos')
        ->with('feedback.message', 'El juego <b>' . e($game['titulo']) . '</b> se eliminó con éxito.');
    }


    public function edit(int $id) {
      $game = Game::findOrFail($id);
      return view('games.edit', [
        'game' => $game
      ]);
    }

    public function update(Request $request, int $id) {
       $request->validate([
        'titulo' => 'required|min:5|max:255',
        'fecha_lanzamiento' => 'required|before_or_equal:today|date_format:Y-m-d',
        'descripcion' => 'required|min:25',
        'precio' => 'required|numeric|min:0'
      ],
      [
        'titulo.required' => 'El título es obligatorio',
        'titulo.min' => 'El título debe tener más de 5 caracteres',
        'titulo.max' => 'El título no debe tener más de 255 caracteres', 
        'fecha_lanzmiento.required' => 'La fecha es obligatoria',
        'fecha_lanzamiento.before_or_equal' => 'La fecha debe ser hoy o anterior al día de hoy',
        'fecha_lanzmiento.date_format' => 'La fecha debe tener el formato y-m-d',
        'descripcion.required' => 'La descripción es obligatoria',
        'descripcion.min' => 'La descripción debe tener más de 25 caracteres',
        'precio.required' => 'El precio es obligatorio',
        'precio.numeric' => 'El precio debe ser un número',
        'precio.min' => 'El precio debe ser mayor a 0'
      ]);

      $data = $request->only(['titulo', 'fecha_lanzamiento', 'descripcion', 'precio']);

      $game = Game::findOrFail($id);
      $game->update($data);

      return to_route('adminJuegos')
        ->with('feedback.message', 'El juego <b>' . e($data['titulo']) . '</b> se editó con éxito.');
    }
}
