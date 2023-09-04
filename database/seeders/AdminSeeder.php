<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use function Laravel\Prompts\password;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("admin")->insert([
            "name"=>"ayseturan",
            "email"=>"ayse0025turan@gmail.com",
            "password"=>bcrypt("ayse1020")
        ]);
    }
}
