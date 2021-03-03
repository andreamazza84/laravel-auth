<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Category;
use Faker\Generator as Faker;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newCat = new Category();
            $newCat->body = $faker->word();
            $newCat->save();
        }
    }
}
