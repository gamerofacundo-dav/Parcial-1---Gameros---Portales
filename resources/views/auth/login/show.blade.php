<x-layouts.main>
    <x-slot:title>Ingresar a mi cuenta</x-slot:title>

    <h1 class="mb-3">Ingresar</h1>
    @if (session()->has('feedback.message'))
        <div class="alert alert-danger">{{ session('feedback.message') }}</div>
    @endif
    <form action="{{ route('auth.login.process') }}" method="POST" class="mt-5 pt-4 text-light container">
        @csrf
        <div class="mb-3">
            <label class="" for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}">
        </div>
        <div class="mb-3">
            <label class="" for="password">Contraseña</label>
            <input type="password" id="password" name="password">
        </div>
        <input type="submit" value="Ingresar">
    </form>
</x-layouts.main>