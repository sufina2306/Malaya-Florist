<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'nama' => 'Sufina',
            'email' => 'nina@gmail.com',
            'nohp' => '080011223344',
            'password' => Hash::make('123456789'),
            'level' => 'admin'
        ]);
    }
}
