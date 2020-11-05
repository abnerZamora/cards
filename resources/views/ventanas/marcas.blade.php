@extends('welcome')
@section('resultado')
<form class="border p-3 form" method="POST" action="/marcas">
 <div class="jumbotron abs-center">
  @csrf
  <div class="form-group active">
      <div class="content text-center">
        <h1>Ingrese la Marca</h1>
      </div>
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="emailHelp">
     
  </div>
  <button type="submit" class="btn btn-dark">Guardar</button>
 </div>
</form>
@endsection
