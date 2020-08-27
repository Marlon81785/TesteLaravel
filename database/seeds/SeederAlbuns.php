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
            'nome' => 'Resolutions',
            'lancamento' => '2020-08-26',
            'artista' => 'Andy Timonns',
            'faixas' => 'Play, Cry for you',
        ]);
    }
}
