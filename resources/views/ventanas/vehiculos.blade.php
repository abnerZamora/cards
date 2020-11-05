@extends('welcome')
@section('resultado')

<form method="POST" action="">

@csrf
<style>
    input{
        margin: 5px;
        padding: 1px;
    }

</style>
<label for="marcas"> Marcas</label>

<select name="marca" id="marca">
 <option value="toyota">Toyota</option>
 <option value="yaris">Yaris</option>
 <option value="ferrari">Ferrari</option>
 <option value="chevrolet">Chevrolet</option>
 <option value="ford mustang">Ford Mustang</option>
 <option value="porsche">Porsche</option>
</select>

<label for="color"> Color</label>
<select name="color" id="color">
 <option value="blanco">Blanco</option>
 <option value="amarillo">Amarillo</option>
 <option value="gris">Gris</option>
 <option value="rojo">Rojo</option>
 <option value="verde">Verde</option>
</select>

<div class="form-group">
    <small id="emailHelp" class="form-text text-pink">Escriba la Placa</small>
 <label for="placa">Placa:</label>
 <input type="text" class="form-group" name="placa" id="placa" aria-describedby="emailHelp" >
 
</div>

<div class="form-group">
    <small id="emailHelp" class="form-text text-pink">Escriba el chasis</small>
    <label for="chasis">Chasis:</label>
    <input type="text" class="form-group" name="chasis" id="chasis" aria-describedby="emailHelp">
    
   </div>

   <div class="form-group">
    <small id="emailHelp" class="form-text text-pink">Escriba su nombre</small>
    <label for="dueño">Dueño:</label>
    <input type="text" class="form-group" name="dueño" id="dueño" aria-describedby="emailHelp">
    
   </div>

   <button type="submit" class="btn btn-dark">Guardar</button>
</form>   
@endsection