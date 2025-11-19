<?php
//    $ejemploContenido =   '<div>   
//                     <section>
//                         <h2>[Título sección 1]</h2>
//                         <p>[Párrafo de contenido sección 1]</p>
//                     </section>

//                     <section>
//                         <h2>[Título sección 2]</h2>
//                         <p>[Párrafo de contenido sección 2]</p>
//                     </section>

//                     <section>
//                         <h2>[Título sección 3]</h2>
//                         <img src="[imagen seccion 3]" alt="[Texto alternativo img seccion 3]">
//                         <p>[Párrafo de contenido sección 3]</p>
//                     </section>
//                 </div>';
?>

<x-layouts.admin>
    <x-slot:title>Agregar blog</x-slot:title>
    <section id="section-blogs-crear">
        <div class="container d-flex flex-column align-items-center">
            <h2 class="text-center">Agregar nuevo blog</h2>
            <form action=" {{ route('blogs.store') }}" method="POST" class="d-flex flex-column justify-content-around p-3">
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
                    value="{{ old('titulo') }}">
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
                    @enderror>{{ old('descripcion')}} </textarea>
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
                    @enderror>{{ old('contenido')}} </textarea>
                    @error('contenido')
                     <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                {{-- <div class="d-flex flex-column">
                    <label for="autor">Autor</label>
                    <input 
                    type="text" 
                    name="autor" 
                    id="autor"
                    class="a @error('autor') border-red @enderror"
                    @error('autor')
                    aria-invalid="true"
                    aria-errormessage="error-autor"
                    @enderror
                    value="{{ old('autor') }}">
                    @error('autor')
                     <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div> --}}
                <p class="mt-3">
                    <strong>Autor:</strong> {{ Auth::user()->name }}
                </p>
                <div class="d-flex justify-content-center gap-3 mt-4">
                    <input type="submit" value="Agregar" class="btn btn-primary px-4">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary px-4">Cancelar</a>
                </div>
            </form>
        </div>

        {{-- <div class="container mt-5">
            <h2>Ejemplo de contenido</h2>
            <span>Por favor respetar la sintaxis tal cual y reemplazar "[]"</span>
            <pre class="bg-secondary">
                {{ $ejemploContenido }}
            </pre>
        </div> --}}
    </section>
</x-layouts.admin>