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
        DB::table('pais')->insert([
            'nome' => 'Brasil',
        ]);

        DB::table('pais')->insert([
            'nome' => 'Argentina',
        ]);

        DB::table('regioes')->insert([
            'pais_id' => 1,
            'nome' => 'Norte',
        ]);

        DB::table('regioes')->insert([
            'pais_id' => 1,
            'nome' => 'Nordeste',
        ]);

        DB::table('comidas')->insert([
            'regiao_id' => 1,
            'nome' => 'acarajé',
        ]);

        DB::table('comidas')->insert([
            'regiao_id' => 1,
            'nome' => 'cuscuz',
        ]);
    }
}
