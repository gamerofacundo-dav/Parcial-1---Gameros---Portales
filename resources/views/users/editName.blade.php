<x-layouts.main>
    <section id="section-editar-nombre">
        <div class="container d-flex flex-column align-items-center">
            <h1>Editar tu nombre</h1>
            <form action="{{ route('users.updateName') }}" method="POST" novalidate>
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
                        value="{{ old('name', $user->name) }}">
                        @error('name')
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
</x-layouts.main>