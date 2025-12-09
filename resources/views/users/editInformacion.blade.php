<x-layouts.main>
    <section id="section-editar-nombre">
        <div class="container d-flex flex-column align-items-center">
            <h1>Editar tu dirección</h1>
            <form action="{{ route('users.updateInformacion') }}" method="POST" novalidate>
                @csrf
                <div class="d-flex flex-column">
                    <label for="direccion">Dirección</label>
                    <input 
                        type="text" 
                        id="direccion" 
                        name="direccion"  
                        class="a @error('direccion') border-red @enderror"
                        @error('direccion')
                        aria-invalid="true"
                        aria-errormessage="error-direccion"
                        @enderror
                        value="{{ old('direccion', $user->profile->direccion) }}">
                        @error('direccion')
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