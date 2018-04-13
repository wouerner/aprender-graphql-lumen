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
            'nome' => str_random(10),
        ]);

        DB::table('pais')->insert([
            'nome' => str_random(10),
        ]);

        DB::table('regioes')->insert([
            'pais_id' => 1,
            'nome' => str_random(10),
        ]);

        DB::table('regioes')->insert([
            'pais_id' => 1,
            'nome' => str_random(10),
        ]);

        DB::table('comidas')->insert([
            'regiao_id' => 1,
            'nome' => str_random(10),
        ]);
    }
}
