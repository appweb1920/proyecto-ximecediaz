<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('secciones')->insert([
            'seccion' => 'Naturaleza',
        ]);
        DB::table('secciones')->insert([
            'seccion' => 'Comida',
        ]);
        DB::table('secciones')->insert([
            'seccion' => 'Animales',
        ]);
    }
}
