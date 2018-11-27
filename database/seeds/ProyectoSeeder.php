<?php

use Illuminate\Database\Seeder;

class ProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10 ; $i++) { 
    		DB::table('proyectos')->insert([
            	'nombre' => str_random(10),
            	'titulo'=>str_random(10),
            	'fechainicio'=>'2018-11-07',
            	'fechafin'=>'2018-12-10',
            	'horasestimadas'=>rand(0,20)
        	]);
    	}
    }
}
