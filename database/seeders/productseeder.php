<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
         'name'=>'Sumsang',
         'price'=>'1200',
         'category'=>'mobile',
         'gallery'=>"https://www.nicepng.com/png/detail/765-7656890_free-png-download-samsung-galaxy-s6-png-images.png",
         'Description'=>'sumsang a3',
        ]);
    }
}
