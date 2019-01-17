<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Models\Login;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //
    use PeliculaController;
    public function store(Request $request)
    {
	$rules=array(
        	'firstname' => 'required',
        	'lastname' => 'required',
		'birthdate' => 'required',
		'username' => 'required',
		'password' => 'required',
		'city' => 'required',
		'country' => 'required',
		'count' => 'required'
    	);
	$validator = Validator::make($request->toArray(), $rules);
        if ($validator->fails()) {
	    #Session::flash('message', 'Error!');
            return Redirect::to('registro');
        } else {
            // store
	    $usuario= new Usuario;
            $login= new Login;
            $usuario->nombre=$request->input('firstname');
            $usuario->apellido=$request->input('lastname');
	    $usuario->fecha_nacimiento=$request->input('birthdate');
	    $login->user=$request->input('username');
	    $login->password=$request->input('password');
	    $usuario->ciudad=$request->input('city');
	    $usuario->pais_nacimiento=$request->input('country');
	    $usuario->tipo_cuenta=$request->input('count');
	    $usuario->save();
	    $login->save();

            #Session::flash('message', 'Successfully created nerd!');
	    #dd($usuario,$login);
            return Redirect::to('login');
        }
    }
    public function autenticacion(Request $request)
    {
	$rules=array(
        	'username' => 'required',
        	'password' => 'required'
    	);
	$validator = Validator::make($request->toArray(), $rules);
        if ($validator->fails()) {

	    #Session::flash('message', 'Error!');
            return Redirect::to('login');
        }else{
            // store
            $usuario=$request->input('username');
            $password=$request->input('password');
	    $UsuarioValidacion= Login::where('user', '=', $usuario)->get()[0];
	    #dd($user,$pass);
	    #echo $UsuarioValidacion;
	    if($usuario === $UsuarioValidacion["user"] && $password === $UsuarioValidacion["password"] && isset($UsuarioValidacion) ){
		    $pelis=$this->getAll();
	    	    #echo $pelis;
		    return View('principal')->with('pelis',$pelis);#pasando los datos se session a la ventana principal de cada login
	    }
            else{
	    	    #Session::flash('message', 'Successfully created nerd!');
	            return Redirect::to('login');

	    }
        }
    }
}
