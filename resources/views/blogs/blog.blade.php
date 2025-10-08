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
                                <a href="{{ route('blogs.details', ['id' => $blog->blog_id]) }}">Leer más</a>
                                
                            </div>
                        </article>
                @endforeach
                {{-- <article class="bg">
                    <div class="bg-dedicado"></div>
                    <div class="contenido">
                        <h3>Titulo</h3>
                        <p>Descripcion super corta y resumida</p>
                        <a>Leer más</a>
                        <span>Autor - 2025</span>
                    </div>
                </article>
                <article class="bg">
                    <div class="bg-dedicado2"></div>
                    <div class="contenido">
                        <h3>Titulo</h3>
                        <p>Descripcion super corta y resumida</p>
                        <a>Leer más</a>
                        <span>Autor - 2025</span>
                    </div>
                </article>
                <article class="bg">
                    <div class="bg-dedicado3"></div>
                    <div class="contenido">
                        <h3>Titulo</h3>
                        <p>Descripcion super corta y resumida</p>
                        <a>Leer más</a>
                        <span>Autor - 2025</span>
                    </div>
                </article>
                <article class="bg">
                    <div class="bg-dedicado"></div>
                    <div class="contenido">
                        <h3>Titulo</h3>
                        <p>Descripcion super corta y resumida</p>
                        <a>Leer más</a>
                        <span>Autor - 2025</span>
                    </div>
                </article>
                <article class="bg">
                    <div class="bg-dedicado2"></div>
                    <div class="contenido">
                        <h3>Titulo</h3>
                        <p>Descripcion super corta y resumida</p>
                        <a>Leer más</a>
                        <span>Autor - 2025</span>
                    </div>
                </article>
                <article class="bg">
                    <div class="bg-dedicado3"></div>
                    <div class="contenido">
                        <h3>Titulo</h3>
                        <p>Descripcion super corta y resumida</p>
                        <a>Leer más</a>
                        <span>Autor - 2025</span>
                    </div>
                </article>
                <article class="bg">
                    <div class="bg-dedicado"></div>
                    <div class="contenido">
                        <h3>Titulo</h3>
                        <p>Descripcion super corta y resumida</p>
                        <a>Leer más</a>
                        <span>Autor - 2025</span>
                    </div>
                </article> --}}
            </div>
        </section>
    </div>
</x-layouts.main>