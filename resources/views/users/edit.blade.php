<x-layouts.admin>
    <x-slot:title>Editar usuario</x-slot:title>
    <section id="section-blogs-crear">
        <div class="container d-flex flex-column align-items-center">
            <h2 class="fw-normal text-center">Editar {{ $usuario->email }}</h2>
            <form action=" {{ route('users.update', ['id' => $usuario->id]) }}" method="POST" class="d-flex flex-column justify-content-center gap-4 p-3" novalidate>
                @csrf
                <div class="d-flex flex-column">
                    <label for="name">Nombre</label>
                    <input 
                        type="text" 
                        id="name" 
                        name="name"  
                        class="a @error('name') border-red @enderror"
                        @error('name')
                        aria-invalid="true"
                        aria-errormessage="error-name"
                        @enderror
                        value="{{ old('name', $usuario->name) }}">
                    @error('name')
                     <p class="text-danger">{{ $message }}</p>
                    @enderror  
                </div>
                <div class="d-flex flex-column">
                    <label for="email">Email</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        class="a @error('email') border-red @enderror"
                        @error('email')
                        aria-invalid="true"
                        aria-errormessage="error-email"
                        @enderror
                        value="{{ old('email', $usuario->email) }}">
                    @error('email')
                     <p class="text-danger">{{ $message }}</p>
                    @enderror  
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <input type="submit" value="Editar" class="btn btn-action px-4 me-3">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary px-4">Cancelar</a>
                </div>
            </form>
        </div>
    </section>
</x-layouts.admin>