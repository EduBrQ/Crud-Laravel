<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProdutosSeeder::class);
        $this->call(ColecoesSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TitulosSeeder::class);
        $this->call(AmigosSeeder::class);
    }
}
