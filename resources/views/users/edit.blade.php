<x-layouts.admin>
    <x-slot:title>Editar usuario</x-slot:title>
    <section id="section-blogs-crear">
        <div class="container d-flex flex-column align-items-center">
            <h2 class="fw-normal text-center">Editar {{ $usuario->email }}</h2>
            <form action=" {{ route('users.update', ['id' => $usuario->id]) }}" method="POST" class="d-flex flex-column justify-content-center gap-4 p-3">
                @csrf
                <div class="d-flex flex-column">
                    <label for="name">Nombre</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $usuario->name) }}">
                </div>
                <div class="d-flex flex-column">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email', $usuario->email) }}">
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <input type="submit" value="Editar" class="btn btn-action px-4 me-3">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary px-4">Cancelar</a>
                </div>
            </form>
        </div>
    </section>
</x-layouts.admin>