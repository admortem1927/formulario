<?php

use Illuminate\Database\Seeder;

class EntidadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('entidad')->insert([
            ['afiliado' => '', 'nom_entidad' => 'medplus', 'tipo_entidad' => 'Privada'],
            ['afiliado' => '', 'nom_entidad' => 'colmedica', 'tipo_entidad' => 'Privada'],
            ['afiliado' => '', 'nom_entidad' => 'axa colpatria', 'tipo_entidad' => 'Privada'],
            ['afiliado' => '', 'nom_entidad' => 'seguros liberty', 'tipo_entidad' => 'Privada'],
            ['afiliado' => '', 'nom_entidad' => 'seguros sura', 'tipo_entidad' => 'Privada'],
            ['afiliado' => '', 'nom_entidad' => 'allianz', 'tipo_entidad' => 'Privada'],
            ['afiliado' => '', 'nom_entidad' => 'seguros sura', 'tipo_entidad' => 'Privada'],
            ['afiliado' => '', 'nom_entidad' => 'seguros del estado', 'tipo_entidad' => 'Privada'],
            ['afiliado' => '', 'nom_entidad' => 'seguros bolivar', 'tipo_entidad' => 'Privada'],
            ['afiliado' => '', 'nom_entidad' => 'positiva', 'tipo_entidad' => 'Privada'],
            ['afiliado' => '', 'nom_entidad' => 'sena', 'tipo_entidad' => 'Privada'],
            ['afiliado' => '', 'nom_entidad' => 'ecopetrol', 'tipo_entidad' => 'Privada'],
          
        ]);
    }
}
