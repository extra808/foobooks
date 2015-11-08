<?php

use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $book = new \Foobooks\Book();
        $book->title = 'Harry Potter';
        $book->author = 'JK Rowling';
        $book->published = 1999;
        $book->cover = 'http://p1.dwa15.cognize.org/photos/curtis-holding-macaw_sm.jpg';
        $book->purchase_link = 'http://p1.dwa15.cognize.org/';
        $book->page_count = 432;
        $book->save(); // insert new book in table

    }
}
