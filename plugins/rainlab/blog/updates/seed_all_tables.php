<?php namespace RainLab\Blog\Updates;

use Carbon\Carbon;
use RainLab\Blog\Models\Post;
use RainLab\Blog\Models\Category;
use October\Rain\Database\Updates\Seeder;

class SeedAllTables extends Seeder
{

    public function run()
    {
        Category::create(['name' => 'artCodelab', 'slug' => 'artcodelab']);
        Category::create(['name' => 'Tecnología', 'slug' => 'tecnologia']);
        Category::create(['name' => 'e-Gobierno', 'slug' => 'e-gobierno']);
    }

}
