<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request as HttpRequest;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('ventanas.aloha');
});

Route::get('/vehiculos', function () {
    return view('ventanas.vehiculos');
});


Route::post('/vehiculos', function (HttpRequest $request){
$data=[
    'color'=>$request->color,
    'marca' =>$request ->marca,
    'placa' => $request ->placa,
    'chasis' => $request ->chasis,
    'dueño' => $request ->dueño 
]; 
    return view('resultados.vista',['result'=>$data]);
});



Route::get('/marcas', function () {
    return view('ventanas.marcas');
});

Route::post('/marcas', function (HttpRequest $request) {
    $marca= $request->nombre;
    $request ->offsetSet('marcas',$marca);
    return view('resultados.marca',['marca'=>$marca]);
});




