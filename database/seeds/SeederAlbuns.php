<?php

use Illuminate\Database\Seeder;

class SeederAlbuns extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('albuns')->insert([
            'nome' => 'Lulu Teteita',
            'lancamento' => '2020-08-26',
            'artista' => 'Vera Magalhaes',
            'faixas' => 'Bilu bili, Eu Jovem',
        ]);
    }
}
