<x-layouts.main>
    <x-slot:title>Registrse</x-slot:title>

    <section id="iniciar-sesion" class="d-flex flex-column justify-content-center align-items-center">
        <h1 class="mb-3 text-ligh">Registrarse</h1>
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
        <form action="{{ route('auth.register.process') }}" method="POST" class="mt-5 pt-4 text-light container" novalidate>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="mb-3">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" class="@error('name') border-red @enderror w-100">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" class="@error('email') border-red @enderror w-100">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" autocomplete="on" class="@error('password') border-red @enderror w-100">
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="confirmPassword">Confirmar contraseña</label>
                <input type="password" id="confirmPassword" name="confirmPassword" autocomplete="on" class="@error('confirmPassword') border-red @enderror w-100">
                @error('confirmPassword')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <input type="submit" value="Registrarme" class="btn-action mt-4">
            <p>¿Tenés una cuenta? <a href="{{ route('auth.login.show') }}" class="text-light">Hacé click acá para iniciar sesión</a></p>
        </form>
    </section>
</x-layouts.main>