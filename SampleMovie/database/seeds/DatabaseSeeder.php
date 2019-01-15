<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
	DB::table('usuario')->insert([
	   'id'=>4;
	   'nombre'=>'usuario4',
	   'apellido'=>'apellido4',
	   'fecha_nacimiento'=>'2000-01-01',
	   'tipo_cuenta'=>'cuenta4';
	   'ciudad'=>'Guayaquil',
	   'pais_nacimiento'=>'Ecuador'
	]);
    }
}
