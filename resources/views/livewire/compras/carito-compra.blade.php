@section('content')
    <style>
        .carro {
            padding-left: 200px;
            padding-right: 200px;
            height: 600px;
        }
        .fondo_compras{
            height: 800px       ;
            background-image: url('fondo.jpg');
            background-repeat:no-repeat;
            background-size: cover;
        }
        .row {
       --bs-gutter-x: 0 !important;
        }
        .carro{
            background: white;
        }
        td{
            vertical-align:middle;
        }
        i:hover{
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
            <div class=" carro mt-5 mb 5 pt-5">
                <h1 class="mb-5" style="font-size: 25px "><strong>CARRO DE COMPRAS</strong></h1>
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
                        <tr >
                            <th class="text-center" scope="row">1</th>
                            <td class="text-center" > <img class="m-auto" src="sanitario.png" alt="" width="100px" height="100px"></td>
                            <td class="text-center" >Sanitario</td>
                            <td class="text-center">$200.000</td>
                            <td class="text-center">
                                 <input type="number" value="2" class="form-control shadow-lg m-auto" min="1" step="1" style="width:60px; border:gray;"
                                onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                                
                            </td>
                            <td class="text-center">$400.000</td>
                            <td class="text-center"><i class="fa-solid fa-trash fa-lg"></i></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td><img class="m-auto" src="lavamanos.png" alt="" width="100px" height="100px"></td>
                            <td>Lavamanos</td>
                            <td>$100.000</td>
                            <td> <input  type="number" value="2" class="form-control shadow-lg m-auto" min="1" step="1"  style="width:60px; border:gray;"
                                onkeypress='return event.charCode >= 48 && event.charCode <= 57'></td>
                            <td class="text-center">$200.000</td>
                            <td><i class="fa-solid fa-trash fa-lg"></i></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-center"><strong>Total</strong></td>
                            <td>$600.000</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <div class="row d-flex justify-content-end ps-5 pe-5 mt-5">
                    <button class="btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">PAGAR</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <tr >
                        <td class="text-center" > <img class="m-auto" src="sanitario.png" alt="" width="100px" height="100px"></td>
                        <td class="text-center" >Sanitario</td>
                        <td class="text-center">200.000</td>
                        <td class="text-center">2</td>
                        <td class="text-center">400.000</td>
                    </tr>
                    <tr>
                        <td><img class="m-auto" src="lavamanos.png" alt="" width="100px" height="100px"></td>
                        <td>Lavamanos</td>
                        <td>100.000</td>
                        <td>2</td>
                        <td class="text-center">200.000</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="text-center"><strong>Total</strong></td>
                        <td>$600.000</td>
                    </tr>
                </tbody>
            </table>  
            <div class="row mt-5">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Seleccione la tarjeta</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
            </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Pagar</button>
      </div>
    </div>
  </div>
</div>
@endsection
