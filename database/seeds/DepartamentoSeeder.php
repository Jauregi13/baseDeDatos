<?php

use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 10 ; $i++) { 
    		DB::table('departamentos')->insert([
            	'codigo' => rand(0,1000),
            	'nombre' => str_random(10),
        	]);
    	}
        
    }
}
