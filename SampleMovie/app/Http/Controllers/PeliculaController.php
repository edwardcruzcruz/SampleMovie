<?php

namespace App\Http\Controllers;
use App\Models\Pelicula;
use Illuminate\Http\Request;

trait PeliculaController #extends Controller
{
    //
//public function hacer(Request $request)
  //  {
	#return view('presentacion',['informacion'=>[$request->input('nombre'),$request->input('apellido'),$request->input('email')]]);
    //}
    public function get(Request $request)
    {
	$id_peli=$request->input('id');
	$pelicula = Pelicula::where('id','>','1')->get();
	#foreach($pelicula as $p){
   	#	echo $p->titulo;
	#}
	return View('prueba')->with('pelis',$pelicula);
	dd($pelicula);
    }
    public function getAll()
    {
	$pelicula = Pelicula::all();
	#foreach($pelicula as $p){
   	#	echo $p->titulo;
	#}
	return $pelicula;
    }
    public function edit($id)
    {
        $pelicula = pelicula::find($id);
        return View::make('prueba')
            ->with('ProyectoporID', $pelicula);
    }
}
