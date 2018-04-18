<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id = DB::table('pais')->insert([
            'nome' => 'Brasil',
        ]);

        DB::table('pais')->insert([
            'nome' => 'Argentina',
        ]);

        $p = DB::select('select * from pais');

        DB::table('regioes')->insert([
            'pais_id' => $p[0]->id,
            'nome' => 'Norte',
        ]);

        DB::table('regioes')->insert([
            'pais_id' => $p[0]->id,
            'nome' => 'Nordeste',
        ]);

        DB::table('regioes')->insert([
            'pais_id' => $p[0]->id,
            'nome' => 'Centro-Oeste',
        ]);

        DB::table('regioes')->insert([
            'pais_id' => $p[0]->id,
            'nome' => 'Sudeste',
        ]);

        DB::table('regioes')->insert([
            'pais_id' => $p[0]->id,
            'nome' => 'Sul',
        ]);

		// Região Norte
        DB::table('comidas')->insert([
            'regiao_id' => 1,
            'nome' => 'tucupi',
        ]);

        DB::table('comidas')->insert([
            'regiao_id' => 1,
            'nome' => 'açaí',
        ]);

		// Região Nordeste
        DB::table('comidas')->insert([
            'regiao_id' => 2,
            'nome' => 'mugunzá',
        ]);

        DB::table('comidas')->insert([
            'regiao_id' => 2,
            'nome' => 'acarajé',
        ]);

		// Região Centro-Oeste 
        DB::table('comidas')->insert([
            'regiao_id' => 3,
            'nome' => 'Arroz com Pequi',
        ]);

        DB::table('comidas')->insert([
            'regiao_id' => 3,
            'nome' => 'Pamonha',
        ]);

		// Região Sudeste 
        DB::table('comidas')->insert([
            'regiao_id' => 4,
            'nome' => 'Pão de Queijo',
        ]);

		// Região Sul 
        DB::table('comidas')->insert([
            'regiao_id' => 5,
            'nome' => 'Churrasco',
        ]);

        DB::table('comidas')->insert([
            'regiao_id' => 5,
            'nome' => 'Chimarrão',
        ]);

    }
}
