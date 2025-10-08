<x-layouts.admin>
    <x-slot:title>Eliminar blog</x-slot:title>
    <section id="section-blogs-delete">
        <div class="container">
            <h2 class="text-center">¿Estás seguro de eliminar el blog <span class="fw-bold">{{ $blog->titulo }}</span>?</h2>
            <form action="{{ route('blogs.destroy', ['id' => $blog->blog_id]) }}" method="POST">
                @csrf
                <button type="submit" class="btn-action m-auto">Si, eliminar</button>
            </form>
        </div>
    </section>
</x-layouts.admin>