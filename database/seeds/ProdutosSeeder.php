<?php

use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    public function run()
    {
        DB::table('produtos')->insert([
            [
                'referencia' =>  'PIAL-0312',
                'nome' => 'Cadeado',
                'valor' => '112.98',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'referencia' =>  '3M-xs9123',
                'nome' => 'Fita Adesiva',
                'valor' => '224.98',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'referencia' =>  'CORAL-LATEX-2319',
                'nome' => 'Latão de Tinta 18 L',
                'valor' => '344.98',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'referencia' =>  'PIAL-0312',
                'nome' => 'Cadeado',
                'valor' => '112.98',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'referencia' =>  '3M-xs9123',
                'nome' => 'Fita Adesiva',
                'valor' => '224.98',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'referencia' =>  'CORAL-LATEX-2319',
                'nome' => 'Latão de Tinta 18 L',
                'valor' => '344.98',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}