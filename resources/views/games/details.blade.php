<?php 
    /** @var \App\Models\Game $game*/
        use App\Models\Game;
?>


<x-layouts.main>
    <x-slot:title>Detalles del juego</x-slot:title>
    <div id="detalles">
        <section>
            <div class="d-flex flex-column-reverse flex-lg-row bg align-items-center justify-center">
                <div>
                    <div>
                        <img src="img/{{ $game->portada }}">
                    </div>
                </div>
                <div class="bajar d-flex flex-column align-items-center">
                    <h1>{{ $game->titulo }}</h1>
                    <div>
                        <p>{{ $game->descripcion }}</p>
                        <div class="precio d-flex align-items-center gap-3">
                            <span>${{ Game::formatearPrecio($game->precio) }}</span>
                            <a href="#" class="btn-action">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layouts.main>