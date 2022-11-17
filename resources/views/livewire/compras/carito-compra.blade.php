@section('content')
    <style>
        .carro {
            padding-left: 200px;
            padding-right: 200px;
        }
    </style>
    <div>
        <div class="row ps-5 pe-5 ">
            <div class=" carro mt-5 pt-5">
                <h1 class="mb-5" style="font-size: 25px "><strong>CARRO DE COMPRAS</strong></h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">Articulo</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Total</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr >
                            <th class="align-items-center text-center" scope="row">1</th>
                            <td class="align-items-center text-center"> <img src="3.jpg" alt="" width="100px" height="100px"></td>
                            <td class="align-items-center text-center">Sanitario</td>
                            <td class="align-items-center text-center">@mdo</td>
                            <td class="align-items-center text-center">Otto</td>
                            <td class="align-items-center text-center">@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Lavamanos</td>
                            <td>@fat</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
