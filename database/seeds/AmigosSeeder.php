<?php

use Illuminate\Database\Seeder;

class AmigosSeeder extends Seeder
{
    public function run()
    {
        DB::table('amigos')->insert([
            [
                'nome' => 'Chico',
                'apelido' => 'bento',
                'telefone' => '98858',
                'rua' => 'rua A',
                'bairro' => 'Bairro a',
                'cidade' => 'cidade a',
                'estado' => 'estado a',
                'id_user' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nome' => 'Muela',
                'apelido' => 'muelita',
                'telefone' => '98858',
                'rua' => 'rua A',
                'bairro' => 'Bairro a',
                'cidade' => 'cidade a',
                'estado' => 'estado a',
                'id_user' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nome' => 'Zé',
                'apelido' => 'leitão',
                'telefone' => '98858',
                'rua' => 'rua A',
                'bairro' => 'Bairro a',
                'cidade' => 'cidade a',
                'estado' => 'estado a',
                'id_user' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nome' => 'Marcio',
                'apelido' => 'pioi',
                'telefone' => '98858',
                'rua' => 'rua A',
                'bairro' => 'Bairro a',
                'cidade' => 'cidade a',
                'estado' => 'estado a',
                'id_user' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nome' => 'Humnerto',
                'apelido' => 'macarrão',
                'telefone' => '98858',
                'rua' => 'rua A',
                'bairro' => 'Bairro a',
                'cidade' => 'cidade a',
                'estado' => 'estado a',
                'id_user' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}