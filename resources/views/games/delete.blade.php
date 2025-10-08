<x-layouts.admin>
    <x-slot:title>Eliminar juego</x-slot:title>
    <section id="section-juegos-delete">
        <div class="container">
            <h2 class="text-center">¿Estás seguro de eliminar Baldur's Gate 3 <span class="fw-bold">{{ $game->titulo }}</span>?</h2>
            <img src="../../../img/{{ $game->portada }}">
            <form action="{{ route('games.destroy', ['id' => $game->juego_id]) }}" method="POST">
                @csrf
                <button type="submit" class="btn-action m-auto">Si, eliminar</button>
            </form>
        </div>
    </section>

</x-layouts.admin>