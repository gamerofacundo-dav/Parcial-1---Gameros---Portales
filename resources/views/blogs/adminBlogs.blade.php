<?php 
    use App\Models\Game;
?>

<x-layouts.admin>
    <x-slot:title>Admin blogs</x-slot:title>
    <section class="container" id="section-juegos">
        <div class="container">
            <h2 class="text-center">Blogs</h2>
            
            <div class="d-flex justify-content-center link-crear" >
                <a href="{{  route('blogs.create') }}" class="btn-action">
                    Agregar blog
                </a>
            </div>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th scope="col" class="p-4 text-center">Título</th>
                            <th scope="col" class="p-4 text-center">Descripción</th>
                            <th scope="col" class="p-4 text-center">Contenido</th>
                            <th scope="col" class="p-4 text-center">Autor</th>
                            <th scope="col" class="p-4 text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                            <tr>
                                <td align="center" valign="middle" class="p-4">{{ $blog->titulo }}</td>
                                <td align="center" valign="middle" class="p-4">{{ $blog->descripcion }}</td>
                                <td align="center" valign="middle" class="p-4"><a href=" {{ route('blogs.blogContenido', ['id' => $blog->blog_id]) }} " class="btn-action">Ver contenido</a></td>
                                <td align="center" valign="middle" class="p-4 font-italic">{{ $blog->autor }}</td>
                                <td align="center" valign="middle" class="p-4">
                                    <div class="d-flex gap-3">
                                        <a href="{{ route('blogs.edit', ['id' => $blog->blog_id]) }}" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="{{ route('blogs.delete', ['id' => $blog->blog_id]) }}" class="btn btn-secondary bg-danger"><i class="fa-solid fa-trash"></i></a>
                                    </div>
                                </td> 
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-layouts.admin>