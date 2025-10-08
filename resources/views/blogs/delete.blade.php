<x-layouts.admin>
    <x-slot:title>Eliminar blog</x-slot:title>
    <section id="section-blogs-delete">
        <div class="container">
            <h2 class="text-center">¿Estás seguro de eliminar el blog <span class="fw-bold">{{ $blog->titulo }}</span>?</h2>
            <form action="{{ route('blogs.destroy', ['id' => $blog->blog_id]) }}" method="POST" class="d-flex justify-content-center gap-3">
                @csrf
                <button type="submit" class="btn btn-danger px-4">Sí, eliminar</button>
                <a href="{{ url()->previous() }}" class="btn btn-secondary px-4">Cancelar</a>
            </form>
        </div>
    </section>
</x-layouts.admin>