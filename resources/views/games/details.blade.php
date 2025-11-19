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
                        <img src="{{ \Storage::url($game->portada) }}" alt="Portada de {{ $game->titulo }}">
                    </div>
                </div>
                <div class="bajar d-flex flex-column align-items-center">
                    <h1>{{ $game->titulo }}</h1>
                    <div class="d-flex gap-3">
                        @foreach ($game->platforms as $platform) 
                            <div>
                                {{ $platform->nombre }}
                            </div>
                        @endforeach
                    </div>
                    <div>
                        <p>{{ $game->descripcion }}</p>
                        <p>Clases incluídas: </p>
                        <div class="d-flex gap-4 clases justify-content-center">
                            @foreach ($game->bg_classes as $clase)
                                <div>
                                    <img src="/img/clases/{{ $clase->portada }}" alt="Escudo de la clase: {{ $clase->nombre }}">
                                    <span>{{$clase->nombre}}</span>
                                </div>
                            @endforeach
                        </div>
                        <div class="precio d-flex align-items-center gap-3">
                            <span>${{ $game->precioFormateado }}</span>
                            <a href="#" class="btn-action">Comprar</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    </div>
</x-layouts.main>