<?php 
    use App\Models\Game;
?>

<x-layouts.admin>
    <x-slot:title>Admin juegos</x-slot:title>
    <section class="container" id="section-juegos">
        <div class="container">
            <h2 class="text-center">Juegos</h2>
            
            <div class="d-flex justify-content-center link-crear" >
                <x-nav-link routeto="games.create">
                    Agregar juego
                </x-nav-link>
            </div>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th scope="col" class="p-4 text-center">Portada</th>
                            <th scope="col" class="p-4 text-center">Titulo</th>
                            <th scope="col" class="p-4 text-center">Lanzamiento</th>
                            <th scope="col" class="p-4 text-center">Precio</th>
                            <th scope="col" class="p-4 text-center">Descripción</th>
                            <th scope="col" class="p-4 text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($games as $game)
                            <tr>
                                <td align="center" valign="middle" class="p-4"><img src="../img/{{ $game->portada }}"></img></td>
                                <td align="center" valign="middle" class="p-4">{{ $game->titulo }}</td>
                                <td align="center" valign="middle" class="p-4">{{ $game->fecha_lanzamiento }}</td>
                                <td align="center" valign="middle" class="p-4">${{ $game->precio }}</td>
                                <td align="center" valign="middle" class="p-4">{{ Game::recortarDescripcion($game->descripcion); }}</td>
                                <td align="center" valign="middle" class="p-4">
                                    <div class="d-flex gap-3">
                                        <a href="{{ route('games.edit', ['id' => $game->juego_id]) }}" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="{{ route('games.delete', ['id' => $game->juego_id]) }}" class="btn btn-secondary bg-danger"><i class="fa-solid fa-trash"></i></a>
                                    </div>
                                </td> 
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-layouts.admin>