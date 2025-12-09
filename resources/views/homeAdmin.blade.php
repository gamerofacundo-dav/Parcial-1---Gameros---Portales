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
                <div class="users">
                    <x-nav-link routeto="users.adminUsuarios">
                        <div class="d-flex justify-content-center flex-column align-items-center">
                            <span>Administrar</span>
                            <h2>Usarios</h2>
                        </div>
                    </x-nav-link>
                </div>
            </div>
        </section>
        <section id="section-dashboard" class="container mt-5">
            <div class="line d-flex justify-content-between">
                <h2 class="mb-0">Dashboard</h2>
                <i class="fa-solid fa-chart-simple fs-2"></i>
            </div>
            <div class="stats d-flex justify-content-between flex-wrap gap-3">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h3 class="fs-4 text-center">Dinero total</h3>
                    <span class="fs-2">${{ $dineroTotal }}</span>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h3 class="fs-4 text-center">Cantidad de compras</h3>
                    <span class="fs-2">{{ $cantCompras }}</span>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h3 class="fs-4 text-center"> Cantidad de usuarios</h3>
                    <span class="fs-2">{{ $cantUsuarios }}</span>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h3 class="fs-4 text-center">Ultimas compras</h3>
                    <ul class="list-unstyled">
                        @foreach ($ultCompras as $ultCompra)
                            @foreach ($ultCompra->products as $product)
                                <li>{{ $product->titulo }} - {{$ultCompra->user->name}}</li>
                            @endforeach
                        @endforeach
                    </ul>
                </div>
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h3 class="fs-4 text-center">Mes con más facturación <span class="fw-bold fs-3">2025-{{ $mesConMasFacturacion[0] }}</span></h3>
                    <span class="fs-2">${{ $mesConMasFacturacion[1] }}</span>
                </div>
            </div>
        </section>
    </div>
</x-layouts.admin>