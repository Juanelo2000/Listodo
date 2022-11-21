<div>
    <style>
        .carro {
            padding-left: 200px;
            padding-right: 200px;
            height: auto;
        }

        .fondo_compras {
            height: 800px;
            background-image: url('fondo.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .row {
            --bs-gutter-x: 0 !important;
        }

        .carro {
            background: white;
        }

        td {
            vertical-align: middle;
        }

        i:hover {
            cursor: pointer;
        }

        .btn-primary {
            background-color: #0d6efd !important;
        }

        .btn-secondary {
            background-color: #6c757d !important;
        }
    </style>
    <div>
        <div class="row ps-5 pe-5 fondo_compras">
            <div class=" carro mt-5 mb-5 pt-5">
                <h1 class="mb-5" style="font-size: 25px "><strong>CARRO DE COMPRAS </strong></h1>
                @if(count($listaCompras)>0)
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Articulo</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Total</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listaCompras as $key=>$articulo )
                        <tr>
                            <th class="text-center" scope="row">{{ $key+1 }}</th>
                            <td class="text-center"> <img class="m-auto" src="{{ $articulo["imagen"] }}" alt=""
                                    width="100px" height="100px"></td>
                            <td class="text-center">{{ $articulo["nombre"] }}</td>
                            <td class="text-center">${{ $articulo["precio"] }}</td>
                            <td class="text-center">
                                <input type="number" value="{{ $articulo["cantidad"] }}"
                                    class="form-control shadow-lg m-auto" min="1" step="1"
                                    style="width:60px; border:gray;"
                                    onkeypress='return event.charCode >= 48 && event.charCode <= 57'>

                            </td>
                            <td class="text-center">${{ $articulo["precio"] }}</td>
                            <td class="text-center"><i wire:click="eliminarArticulo({{ $key }})"class="fa-solid fa-trash fa-lg"></i></td>
                        </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-center"><strong>Total</strong></td>
                            <td>${{ $total }}</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <div class="row d-flex justify-content-end ps-5 pe-5 mt-5">
                    <button class="btn-primary" data-bs-toggle="modal" data-bs-target="#modalArticulos">PAGAR</button>
                </div>
                @else
                    <div class="row pt-5 mt-5">
                        <h5><strong>Carrito de compras vacio..............</strong></h5>
                    </div>
                @endif
               
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="modalArticulos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><strong>PAGAR ARTICULOS</strong></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Imagen</th>
                                <th scope="col">Articulo</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listaCompras as $key=>$articulo )
                            <tr>
                                <td class="text-center"> <img class="m-auto" src="{{ $articulo["imagen"] }}" alt=""
                                        width="100px" height="100px"></td>
                                <td class="text-center">{{ $articulo["nombre"] }}</td>
                                <td class="text-center">{{ $articulo["precio"] }}</td>
                                <td class="text-center">{{ $articulo["cantidad"] }}</td>
                                <td class="text-center">400.000</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="text-center"><strong>Total</strong></td>
                                <td>${{ $total }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row mt-5 ">
                        <h6 class="text-start"><strong>Pepito Perez</strong></h6>
                        <p class="text-start"><strong>Dirección:</strong> Politecnico grancolombiano</p>
                    </div>
                    <div class="row mt-1">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Seleccione la tarjeta</option>
                            <option value="1">Cuenta ahorros 93713423 &#xe04c;</option>
                            <option value="2">Cuenta corriente 123142</option>
                            <option value="3">Cuenta ahorros 4353634</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" wire:click="pagarArticulos"class="btn btn-primary">Pagar</button>
                </div>
            </div>
        </div>


    </div>
    <script>    
    
    document.addEventListener('cerrarModal', event => {
        $('#modalArticulos').modal("hide");
        Swal.fire({
            title: '¡PAGO REGISTADO EXITOSAMENTE!',
            icon: 'success',
            showConfirmButton: false,
            timer: 2000
        });
    });
     </script>
</div>
