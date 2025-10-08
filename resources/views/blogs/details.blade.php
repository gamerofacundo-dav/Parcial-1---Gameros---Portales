<x-layouts.main>
    <x-slot:title>Detalles del blog</x-slot:title>
    <section id="blog-detalle">
        <div id="blog-detalle-{{ $blog->blog_id }}">
            <section>
                <div class="container">
                    <h1>{{ $blog->titulo }}</h1>
                </div>
            </section>
            <section class="container contenido">
                {!! $blog->contenido !!}
            </section>
        </div>
    </section>
</x-layouts.main>