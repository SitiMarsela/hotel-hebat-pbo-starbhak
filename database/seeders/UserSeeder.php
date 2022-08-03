<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'nama_pengguna' => 'admin',
            'email' => 'admin@gmail.com',
            'telp' => '081212121111',
            'password' => bcrypt('admin123')
        ]);
    }
}
