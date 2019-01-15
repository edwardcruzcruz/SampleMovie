<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
	public function up() 

	{ 

		Schema::create('usuario', function (Blueprint $table) { 

		$table->increments('id'); 

		$table->string('nombre'); 

		$table->string('apellido');

		$table->date('fecha_nacimiento'); 

		$table->string('tipo_cuenta');

		$table->string('ciudad');
		
		$table->string('pais_nacimiento');

		$table->timestamps(); 

		}); 
	}
}
