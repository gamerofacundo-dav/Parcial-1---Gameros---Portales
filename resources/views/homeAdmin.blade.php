<x-layouts.admin>
    <x-slot:title>Panel admin</x-slot:title>
    <div id="adminHome">
        <section class="container" id="section-1">
            <div class="d-flex flex-column flex-md-row justify-content-center gap-5 mt-4">
                <div class="games">
                    <x-nav-link routeto="adminJuegos">
                        <div class="d-flex justify-content-center flex-column align-items-center">
                            <span>Administrar</span>
                            <h2>Juegos</h2>
                        </div>
                    </x-nav-link>
                </div>
                <div class="blogs">
                    <x-nav-link routeto="blogs.adminBlogs">
                        <div class="d-flex justify-content-center flex-column align-items-center">
                            <span>Administrar</span>
                            <h2>Blogs</h2>
                        </div>
                    </x-nav-link>
                </div>
            </div>
        </section>
    </div>
</x-layouts.admin>