<x-layouts.admin>
    <x-slot:title>Admin - contenido blog</x-slot:title>
    <h2 class="text-center">Preview de contenido</h2>
    <div class="container">
        {!! $blog->contenido !!}
    </div>
</x-layouts.admin>