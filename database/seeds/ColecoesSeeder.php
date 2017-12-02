<?php

use Illuminate\Database\Seeder;

class ColecoesSeeder extends Seeder
{
    public function run()
    {
        DB::table('colecoes')->insert([
            [
                'id_user' => '1',
                'n_edicao' => '23',
                'nome' => 'Marvel',
                'editora' => 'Ática',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id_user' => '1',
                'n_edicao' => '26',
                'nome' => 'Dragon Ball',
                'editora' => 'Ática',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}