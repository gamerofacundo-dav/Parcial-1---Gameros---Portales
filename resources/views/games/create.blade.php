<?php
    // Obtenemos los errores
?>

<x-layouts.admin>
    <x-slot:title>Agregar juego</x-slot:title>
    <section id="section-juegos-crear">
        <div class="container d-flex flex-column align-items-center">
            <h2 class="text-center">Agregar nuevo juego</h2>
            <form action="{{ route('games.store') }}" method="POST" class="d-flex flex-column justify-content-around p-3">
                @csrf
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
                    <label for="fecha_lanzamiento">Fecha de lanzamiento</label>
                    <input
                    type="date"
                    name="fecha_lanzamiento"
                    id="fecha_lanzamiento"
                    class="a @error('fecha_lanzamiento') border-red @enderror"
                    @error('fecha_lanzamiento')
                    aria-invalid="true"
                    aria-errormessage="error-fecha_lanzamiento"
                    @enderror
                    value="{{ old('fecha_lanzamiento') }}">
                    @error('fecha_lanzamiento')
                     <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="d-flex flex-column">
                    <label for="precio">Precio</label>
                    <input
                    type="number"
                    name="precio"
                    id="precio"
                    class="a @error('precio') border-red @enderror"
                    @error('precio')
                    aria-invalid="true"
                    aria-errormessage="error-precio"
                    @enderror
                    value="{{ old('precio') }}">
                    @error('precio')
                     <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="d-flex flex-column">
                    <label for="portada">Portada</label>
                    <input type="file" name="portada" id="portada" enctype="multipart/form-data">
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
                <div class="d-flex justify-content-center">
                    <input type="submit" value="Agregar">
                </div>
            </form>
        </div>
    </section>




    

</x-layouts.admin>