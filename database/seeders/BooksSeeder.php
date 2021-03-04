<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

   public function run()
    {
        DB::table('books')->insert([
            [   
                'author' => Str::random(10),
                'title' => Str::random(10),
                'description' => Str::random(30),
                'genre' => Str::random(10),
                'pages_nb' => rand(1, 10),
                'publication_year' => rand(1900, 2000),
            ],
            [
                'author' => "Victor Hugo",
                'title' => "Odes et Ballades",
                'description' => Str::random(30),
                'genre' => "Poésie",
                'pages_nb' => 300,
                'publication_year' => 1826,
            ],
            [
                'author' => "Vicho",
                'title' => "Epée de vérité",
                'description' => Str::random(30),
                'genre' => "Poésie",
                'pages_nb' => 300,
                'publication_year' => 2021,
            ],
        ]);
    }
}
