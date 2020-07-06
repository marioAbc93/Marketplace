@extends('template')

@section('seccion')

<div class="row">
  <div class="col-xl-12">
    <div class="card mb-4">
        <div class="card-header"><i class="fas fa-percentage mr-1"></i>Productos en descuento
              <a href="{{ route('creardescuento')}}" class="btn btn-primary" style="float: right;" role="button" aria-pressed="true">Agregar producto</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="total" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Precio</th>
                          <th>Tipo</th>
                          <th>Genero</th>
                          <th>Cantidad</th>
                          <th>Descuento</th>
                          <th>Tallas</th>
                          <th>Color </th>
                          <th>Acción</th>

                        </tr>
                    </thead>
                    <tbody>

                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td> %</td>
                                <td></td>
                                <td></td>

                                <td>
                                    <a class="btn btn-warning btn-sm" href=""><i class="fa fa-edit"></i></a>
                                      <form action="#" class="d-inline" method="POST">


                                      </form>
                                      <form action="#" class="d-inline" method="POST">

                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                      </form>
                                </td>
                            </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
  </div>
</div>
@endsection
