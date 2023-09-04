<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{

    public function run(): void
    {
        $pages=["makale1"];
        foreach($pages as $page){
            DB::table("pages")->insert([
               "title"=>$page,
                "content"=>"nasıl olacak bilmiyorum ama böyle olmazz",

            ]);
        }
    }

}
