<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // number of database records to create
        $numRows = 100;
        
        // create Faker object
        $faker = Faker::create(); 

        for ($i = 0; $i < $numRows; $i++) {
            // create model object
            $book = new \Foobooks\Book();
            $book->title = $faker->sentence($nbWords = 6);
            $book->author = $faker->name;
            $book->published = $faker->year('now');
            $book->cover = $faker->imageUrl(640, 480, 'cats');
            $book->purchase_link = $faker->url;
            $book->page_count = $faker->numberBetween(101,1999);

            $book->save(); // insert new book in table
        }

    }
}
