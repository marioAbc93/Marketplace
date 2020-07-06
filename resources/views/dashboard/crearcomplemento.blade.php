@extends('template')

@section('seccion')
@if (session('mensaje'))
      <div class="alert alert-success">
          {{ session('mensaje') }}
      </div>
  @endif
<div class="card mb-4">
                            <div class="card-header"><i class="fas fa-socks mr-1"></i>
                              <a href="{{ route('home') }}" class="btn btn-danger" style="float: right;"><span>Atrás</span></a>
                              Complementos</div>
                            <div class="card-body">
                                <form action="{{ route('complemento.store') }}" method = "POST" enctype="multipart/form-data">

                                    @csrf
                                  <div class="row">
                                  <div class="col-sm-8">


                                    <div class="card">
                                        <div class=" card-header"><i class="fas fa-crop-alt mr-1"></i>
                                            Detalles
                                        </div>
                                        <div class="card-body">

                                            <div class="form-group col-sm-12">
                                                    <input type="text" name="nombre" class="form-control" value="">
                                                    <label class="form-label">Nombre</label>
                                            </div>

                                            <div class="form-group col-sm-12">
                                                    <input type="number" class="form-control"    name="precio" required>
                                                    <label class="form-label">Precio</label>
                                            </div>

                                            <div class="form-group col-sm-12">
                                              <label>Tipo</label>
                                              <select class="form-control"  type="text" name="tipo" >
                                                <option value="">-- Seleccione --</option>
                                                <option value="0 - 0">Casual</option>
                                                <option value="0 - 3">Elegante</option>
                                                <option value="3 - 6">Deportivo</option>
                                                <option value="6 - 9">Camisa</option>
                                                <option value="9 - 12">Sueter</option>
                                                <option value="12 - 18">Body</option>
                                                <option value="18 - 24">Vestido</option>
                                                <option value="2T">Blusa</option>
                                                <option value="Talla 3">Pantalón</option>
                                                <option value="Talla 4">Falda</option>
                                                <option value="Talla 5">Pijama</option>
                                              </select>
                                            </div>
                                            <div class="form-group col-sm-12">
                                              <label>Genero</label>
                                              <select class="form-control"  type="text" name="genero" >
                                                <option value="">-- Seleccione --</option>
                                                <option value="Bebé Niña">Bebé Niña</option>
                                                <option value="Bebé Niño">Bebé Niño</option>
                                                <option value="Niña">Niña</option>
                                                <option value="Niño">Niño</option>
                                              </select>
                                            </div>

                                            <div class="form-group col-sm-12">
                                                    <input type="number" class="form-control" name="cantidad" required>
                                                    <label class="form-label">Cantidad</label>
                                            </div>

                                            <div class="form-group col-sm-12">
                                              <label>Talla</label>
                                              <select class="form-control"  type="text" name="talla" >
                                                <option value="">-- Seleccione --</option>
                                                <option value="0 - 0">0 - 0</option>
                                                <option value="0 - 3">0 - 3</option>
                                                <option value="3 - 6">3 - 6</option>
                                                <option value="6 - 9">6 - 9</option>
                                                <option value="9 - 12">9 -12</option>
                                                <option value="12 - 18">12 -18</option>
                                                <option value="18 - 24">18 -24</option>
                                                <option value="2T">2T</option>
                                                <option value="Talla 3">Talla 3</option>
                                                <option value="Talla 4">Talla 4</option>
                                                <option value="Talla 5">Talla 5</option>
                                                <option value="Talla 6">Talla 6</option>
                                              </select>
                                            </div>

                                            <div class="form-group col-sm-12">
                                                    <input type="color" class="form-control" name="color" required>
                                                    <label class="form-label">Color</label>
                                            </div>

                                        </div>
                                    </div>
                                  </div>
                                  <div class="col-sm-4">
                                    <div class="card mb-2">
                                        <div class="card-header"><i class="far fa-image mr-1"></i>Imagenes</div>
                                        <div class="card-body">
                                                <input type="file" name="imagen1">
                                                <input type="file" name="imagen2">
                                                <input type="file" name="imagen3">
                                            {{-- BUTTON --}}


                                            <button type="submit" class="btn btn-primary mb-2">
                                                <span>Guardar</span>
                                            </button>
                                        </div>
                                    </div>



                                  </div>

                                </div>
                                </form>
                            </div>
                        </div>



@endsection
