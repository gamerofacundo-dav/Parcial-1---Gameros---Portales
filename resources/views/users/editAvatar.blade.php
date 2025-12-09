<x-layouts.main>
    <section id="section-editar-nombre">
        <div class="container d-flex flex-column align-items-center">
            <h1>Editar tu avatar</h1>
            <form action="{{ route('users.updateAvatar') }}" method="POST" enctype="multipart/form-data" novalidate class="d-flex flex-column align-items-center">
                @csrf
                <div>
                    <p>Portada actual</p>
                    @if ($user->profile->avatar !== null && \Storage::disk('public')->exists($user->profile->avatar)) 
                        <img src="{{ \Storage::url($user->profile->avatar) }}" alt="Avatar de {{ $user->name }}" class="img-fluid user-avatar-edit"></img>
                    @elseif ($user->profile->avatar !== null)
                        <img src="../img/{{ $user->profile->avatar }}" alt="Avatar de {{ $user->name }}" class="img-fluid user-avatar-edit"></img>
                    @else
                        <p>No hay un avatar</p>
                    @endif
                </div>
                <div class="d-flex flex-column mt-2">
                    <label for="avatar" aria-label="Cambiar avatar"></label>
                    <input 
                    type="file"
                    name="avatar"
                    id="avatar"
                    enctype="multipart/form-data"
                    >
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <input type="submit" value="Editar" class="btn btn-action px-4 me-3">
                    <a href="{{ url()->previous() }}" class="btn btn-secondary px-4">Cancelar</a>
                </div>
            </form>
        </div>
    </section>
</x-layouts.main>