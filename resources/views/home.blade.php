@extends('template')

@section('seccion')
<div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card border-dark align-items-center mb-4">
                                    <div class="card-body">
                                       <img src="{{ asset('img/billetera.svg') }}" width="100" height="100" alt="">
                                    </div>
                                    <div class="card-footer bg-transparent border-dark">
                                        <a class="small  stretched-link" href="#">Ver Saldos</a>
                                   </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card border-dark align-items-center mb-4">
                                    <div class="card-body"> <img src="{{ asset('img/muneca.svg') }}" width="100" height="100" alt="">
                                    </div>
                                    <div class="card-footer bg-transparent border-dark">
                                        <a class="small  stretched-link" href="{{ route('vestuario') }}">Vestuario</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card border-dark align-items-center mb-4">
                                    <div class="card-body"> <img src="{{ asset('img/zapato.svg') }}" width="100" height="100" alt="">
                                    </div>
                                    <div class="card-footer bg-transparent border-dark">
                                        <a class="small  stretched-link" href="{{ route('calzado') }}">Calzado</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card border-dark align-items-center mb-4">
                                    <div class="card-body"> <img src="{{ asset('img/calcetines.svg') }}" width="100" height="100" alt="">
                                    </div>
                                    <div class="card-footer bg-transparent border-dark">
                                        <a class="small  stretched-link" href="{{ route('complementos') }}">Complementos</a>
                                    </div>
                                </div>
                            </div>
                          </div>
<div class="row">
  <div class="col-xl-12">
    <div class="card mb-4">
        <div class="card-header"><i class="fas fa-home mr-1"></i>Inmuebes
              <a href="#" class="btn btn-primary" style="float: right;" role="button" aria-pressed="true">Agregar nuevo</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="total" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Precio</th>
                          <th>Ciudad</th>
                          <th>Tipo</th>
                          <th>Destinación</th>
                          <th>Habitaciones</th>
                          <th>Baños</th>
                          <th>Área</th>
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
                                <td></td>
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
