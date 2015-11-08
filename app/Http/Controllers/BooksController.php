<?php

namespace Foobooks\Http\Controllers;

use Illuminate\Http\Request;
use Foobooks\Http\Requests;
use Foobooks\Http\Controllers\Controller;

class BooksController extends Controller
{
    //
    public function getIndex($id= '') 
    {
        if ($id == '') {
            $books = new \Foobooks\Book();
            $allBooks = $books->all();
            return view('books.index')-> withBooks($allBooks);
        }
        else {
            $books = new \Foobooks\Book();
            $book = $books->findOrFail($id);
//            return $book;
            return view('books.index')-> withBooks(array() )-> withBook($book);
        }
    }

}
