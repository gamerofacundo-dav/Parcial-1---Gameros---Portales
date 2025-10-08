<x-layouts.main>
    <x-slot:title>Ingresar a mi cuenta</x-slot:title>

    <h1 class="mb-3">Ingresar</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if (session('feedback.message'))
        <div class="alert alert-{{ session('feedback.type', 'danger') }}">
            {{ session('feedback.message') }}
        </div>
    @endif
    <form action="{{ route('auth.login.process') }}" method="POST" class="mt-5 pt-4 text-light container" novalidate>
        @csrf
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}">
        </div>
        <div class="mb-3">
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password">
        </div>
        <input type="submit" value="Ingresar">
    </form>
</x-layouts.main>