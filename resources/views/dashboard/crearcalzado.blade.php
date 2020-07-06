@extends('template')

@section('seccion')
@if (session('mensaje'))
      <div class="alert alert-success">
          {{ session('mensaje') }}
      </div>
  @endif
<div class="card mb-4">
                            <div class="card-header"><i class="fas fa-shoe-prints mr-1"></i>
                              <a href="{{ route('home') }}" class="btn btn-danger" style="float: right;"><span>Atrás</span></a>
                              Calzado</div>
                            <div class="card-body">
                                <form action="{{ route('calzado.store') }}" method = "POST" enctype="multipart/form-data">

                                    @csrf
                                  <div class="row">
                                  <div class="col-sm-8">


                                    <div class="card">
                                        <div class=" card-header"><i class="fas fa-crop-alt mr-1"></i>
                                            Detalles
                                        </div>
                                        <div class="card-body">

                                            <div class="form-group col-sm-12">

                                                    <input type="text" name="nombre" class="form-control" value="{{old('title')}}">
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
                                                    <input type="color" class="form-control" name="color" required>
                                                    <label class="form-label">Color</label>

                                            </div>

                                            <div class="form-group col-sm-12">
                                                    <label>Talla</label>
                                                    <select class="form-control"  type="text" name="talla" >
                                                        <option value="">-- Seleccione --</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>

                                                    </select>
                                            </div>



                                        <!--    <div class="form-group col-sm-12">
                                                <input type="checkbox" id="featured" name="featured" class="filled-in" value="1" />
                                                <label for="featured">Destacada</label>
                                            </div> -->

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
