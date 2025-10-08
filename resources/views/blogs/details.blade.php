<x-layouts.main>
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