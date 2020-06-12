<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i=0; $i<50; $i++) {
          Article::create([
            'title' => $faker->sentence(3),
            'body' => $faker->paragraph(6),
            'tags' => join(',', $faker->words(4))
          ]);
        }
    }
}