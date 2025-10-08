<x-layouts.main>
    <x-slot:title>Blog</x-slot:title>
    <div id="blog">
        <section id="section-1">
            <div class="container">
                <h1>Updates y Noticias</h1>
            </div>
        </section>
        <section id="section-2">
            <h2 class="text-center mb-5 text-light">Últimos posteos</h2>
            <div class="d-flex flex-column flex-md-row justify-content-center gap-5 container flex-wrap">
                @foreach ($blogs as $blog)
                        <article class="bg me-4"> 
                            <div class="bg-dedicado-{{ $blog->blog_id }}"></div>
                            <div class="contenido">
                                <span>{{ $blog->autor }} - {{ $blog->created_at }}</span>
                                <h3>{{ $blog->titulo }}</h3>
                                <p>{{ $blog->descripcion }}</p>
                                <a href="{{ route('blogs.details', ['id' => $blog->blog_id]) }}" class="btn-action">Leer más</a>
                                
                            </div>
                        </article>
                @endforeach
            </div>
        </section>
    </div>
</x-layouts.main>