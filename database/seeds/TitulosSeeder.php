<?php

use Illuminate\Database\Seeder;

class TitulosSeeder extends Seeder
{
    public function run()
    {
        DB::table('titulos')->insert([
            [
                'nome' => 'DBZ',
                'editora' => 'aiwa',
                'valor' => '112.98',
                'data_lancamento' => date('Y-m-d H:i:s'),
                'autor' => 'Akira',
                'id_colecao' => '1',
                'id_user' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nome' => 'PAto donald',
                'editora' => 'baril',
                'valor' => '112.98',
                'data_lancamento' => date('Y-m-d H:i:s'),
                'autor' => 'Disney',
                'id_colecao' => '1',
                'id_user' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nome' => 'Monica',
                'editora' => 'globo',
                'valor' => '112.98',
                'data_lancamento' => date('Y-m-d H:i:s'),
                'autor' => 'Mauricio de Sousa',
                'id_colecao' => '1',
                'id_user' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

        ]);
    }
}