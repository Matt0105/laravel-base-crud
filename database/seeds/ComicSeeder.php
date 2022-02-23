<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i <50 ; $i++) { 
            $newComic = new Comic();

            $newComic->name = $faker->word();
            $newComic->brand = $faker->word(2, true);
            $newComic->editor = $faker->word(3, true);
            $newComic->artists = $faker->paragraphs(rand(1, 10), true);
            $newComic->authors = $faker->paragraphs(rand(1, 10), true);
            $newComic->price = $faker->randomFloat(1, 5, 30);
            $newComic->thumb = $faker->imageUrl(640, 480, 'comic', true);

            $newComic->save();
        }
    }
}
