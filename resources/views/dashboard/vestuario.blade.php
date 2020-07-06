@extends('template')

@section('seccion')

<div class="row">
  <div class="col-xl-12">
    <div class="card mb-4">
        <div class="card-header"><i class="fas fa-tshirt mr-1"></i>Vestuario
              <a href="{{ route('crearvestuario')}}" class="btn btn-primary" style="float: right;" role="button" aria-pressed="true">Agregar producto</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="total" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Tipo</th>
                          <th>Genero</th>
                          <th>Precio</th>
                          <th>Cantidad</th>
                          <th>Tallas</th>
                          <th>Color </th>
                          <th>Acción</th>

                        </tr>
                    </thead>
                    <tbody>

                      @foreach ($vestuario ?? ''  as $item)
                            <tr>
                                <td>{{ $item->nombre }}</td>
                                <td>{{ $item->tipo }}</td>
                                <td>{{ $item->genero }}</td>
                                <td>${{ number_format($item->precio, 0, ',', '.') }}</td>
                                <td>{{ $item->cantidad }}</td>
                                <td>{{ $item->talla }}</td>
                                <td>{{ $item->color }}</td>

                                <td>
                                    <a class="btn btn-warning btn-sm" href=""><i class="fa fa-edit"></i></a>
                                      <form action="#" class="d-inline" method="POST">


                                      </form>
                                      <form action="#" class="d-inline" method="POST">

                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                      </form>
                                </td>
                            </tr>
                            @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>
  </div>
</div>
@endsection
