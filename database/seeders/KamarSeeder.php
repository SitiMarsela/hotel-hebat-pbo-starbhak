<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kamar')->insert([
        [
            'type_kamar' => 'Indonesia Standard Double',
            'nama_fasilitas' => 'AC, Bath, Wifi',
            'jml_kamar' => '10',
        ],[
            'type_kamar' => 'Indonesia Suite Family',
            'nama_fasilitas' => 'AC, TV, Bath, Wifi',
            'jml_kamar' => '10',
        ],[
            'type_kamar' => 'Indonesia Deluxe Double',
            'nama_fasilitas' => 'AC, TV + Netflix, Bath, Wifi',
            'jml_kamar' => '15',
        ]
    ]);
    }
}
