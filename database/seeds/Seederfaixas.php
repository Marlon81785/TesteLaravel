<?php

use Illuminate\Database\Seeder;

class Seederfaixas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faixas')->insert([
            'nome' => 'Cry for you',
            'duracao' => '02:00:00',
            'albun' => 'Andy Timons Together',
            'ordem' => 1,
        ]);
    }
}
