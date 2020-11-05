@extends('welcome')
@section('resultado')


<h1>Se ha registrado el vehiculo </h1>

@foreach ($result as $item)

<h1>{{$item}}</h1>

@endforeach

@endsection