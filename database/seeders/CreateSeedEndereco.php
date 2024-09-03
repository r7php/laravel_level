<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class CreateSeedEndereco extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            "name"=>"teste",
            "email"=>"teste@5",
            "password"=>Hash::make("1234")
        ]);


        DB::table('endereco')->insert([
            "endereco"=>"rua tal numero 1"

        ]);


    }
}
