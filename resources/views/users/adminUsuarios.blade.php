<x-layouts.admin>
    <x-slot:title>Administrar usuarios</x-slot:title>
    <section class="container" id="section-juegos">
        <div class="container d-flex flex-column align-items-center">
            <h2 class="text-center">Usuarios</h2>
            
            <div class="d-flex justify-content-center link-crear">
                {{-- <x-nav-link routeto="games.create">
                    Agregar juego
                </x-nav-link> --}}
            </div>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th scope="col" class="p-4 text-center">Nombre</th>
                            <th scope="col" class="p-4 text-center">Email</th>
                            <th scope="col" class="p-4 text-center">Rol</th>
                            <th scope="col" class="p-4 text-center">Compras</th>
                             <th scope="col" class="p-4 text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                            <tr>
                                <td class="text-center p-4 align-middle">{{ $usuario->name }}</td>
                                <td class="text-center p-4 align-middle">{{ $usuario->email }}</td>
                                <td class="text-center p-4 align-middle">{{ $usuario->rol }}</td>
                                <td class="text-center p-4 align-middle"><a href="{{ route('users.compras', ['id' => $usuario->id]) }}" class="btn-action">Ver compras</a></td>
                                <td class="text-center p-4 align-middle">
                                    <div class="d-flex gap-3">
                                        <a href="{{ route('users.edit', ['id' => $usuario->id]) }}" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i></a>
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