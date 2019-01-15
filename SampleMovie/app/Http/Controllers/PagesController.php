<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    //
	public function index(){ 

		return view('welcome'); 

	}
	public function obtenerUsuarios(){
		#$users = DB::table('usuario')->where('calificacion', '5');
		$sql = "select count(alquiler.id_pelicula) as Num_Vista, pelicula.* from alquiler inner join pelicula on alquiler.id_pelicula = pelicula.id group by alquiler.id_pelicula order by Num_Vista DESC LIMIT 10;
";
		$pelis=DB::select($sql,array(1,10));	
		#foreach ($users as $user){
		#	echo $user->nombre;
		#}	
		return view('prueba')->with('pelis',$pelis);;
	}
	
}
