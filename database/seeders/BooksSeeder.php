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
                'author_id' => rand(1, 5),
                'title' => Str::random(10),
                'description' => Str::random(130),
                'genre' => 'Policier',
                'pages_nb' => rand(50, 100),
                'publication_year' => rand(1900, 2000),
            ],
            [
                'author_id' => 1,
                'title' => "Odes et Ballades",
                'description' => Str::random(130),
                'genre' => "Poésie",
                'pages_nb' => 300,
                'publication_year' => 1826,
            ],
            [
                'author_id' => 3,
                'title' => "Epée de vérité",
                'description' => Str::random(130),
                'genre' => "Poésie",
                'pages_nb' => rand(100, 500),
                'publication_year' => 2021,
            ],
        ]);
    }
}
