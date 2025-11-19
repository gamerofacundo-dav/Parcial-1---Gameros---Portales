<x-layouts.admin>
    <x-slot:title>Agregar blog</x-slot:title>
    <section id="section-blogs-crear">
        <div class="container d-flex flex-column align-items-center">
            <h2 class="text-center">Agregar nuevo blog</h2>
            <form action=" {{ route('blogs.update', ['id' => $blog->blog_id]) }}" method="POST" class="d-flex flex-column justify-content-around p-3">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="d-flex flex-column">
                    <label for="titulo">Título</label>
                    <input 
                    type="text" 
                    name="titulo" 
                    id="titulo"
                    class="a @error('titulo') border-red @enderror"
                    @error('titulo')
                    aria-invalid="true"
                    aria-errormessage="error-titulo"
                    @enderror
                    value="{{ old('titulo', $blog->titulo) }}">
                    @error('titulo')
                     <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="d-flex flex-column">
                    <label for="descripcion">Descripción</label>
                    <textarea
                    name="descripcion"
                    id="descripcion"
                    @error('descripcion')
                    aria-invalid="true"
                    aria-errormessage="error-descripcion"
                    @enderror>{{ old('descripcion', $blog->descripcion)}} </textarea>
                    @error('descripcion')
                     <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="d-flex flex-column">
                    <label for="contenido">Contenido</label>
                    <textarea
                    name="contenido"
                    id="contenido"
                    @error('contenido')
                    aria-invalid="true"
                    aria-errormessage="error-contenido"
                    @enderror>{{ old('contenido', $blog->contenido)}} </textarea>
                    @error('contenido')
                     <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <p class="mt-3">
                    <strong>Autor:</strong> {{ $blog->autor }}
                </p>
                <div class="d-flex justify-content-center mt-4">
                    <input type="submit" value="Editar" class="btn btn-action px-4 me-3">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary px-4">Cancelar</a>
                </div>
            </form>
        </div>
    </section>
</x-layouts.admin>