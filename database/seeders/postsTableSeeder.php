<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class postsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['title'=>'tips bermain arknight untuk pemula', 'content'=>'lorem imput'],
            ['title'=>'buid operator untuk pemula', 'content'=>'lorem imput'],
            ['title'=>'cara menyelesaikan tutorial arknight', 'content'=>'lorem imput']
        ];
        //masukan data ke database
        DB::table('posts')->insert($posts);
    }
}
