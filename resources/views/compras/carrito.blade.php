<?php
    $total = 0;
?>
<x-layouts.main>
    <x-slot:title>Carrito</x-slot:title>
    <section id="section-carrito" class="container text-light">
        <h1>CARRITO</h1>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th scope="col" class="p-4 text-center">Producto</th>
                        <th scope="col" class="p-4 text-center">Precio</th>
                        {{-- <th scope="col" class="p-4 text-center">Total</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                        <tr>
                            <td align="center" valign="middle" class="p-4">
                                <img src="../{{ $producto->portada }}">
                                {{ $producto->titulo }}
                            </td>
                            <td align="center" valign="middle" class="p-4">
                              ${{ $producto->precio }}
                            </td>
                        </tr>
                        {{ $total += $producto->precio }}
                    @endforeach
                    <tr >
                        <td align="center" valign="middle" class="w-full d-flex justify-content-between align-items-center p-3">
                            <span>Total</span>
                            <span>${{$total}}</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-layouts.main>