<?php

namespace Foobooks\Http\Controllers;

use Illuminate\Http\Request;
use Foobooks\Http\Requests;
use Foobooks\Http\Controllers\Controller;

class BooksController extends Controller
{
    //
    public function getIndex($title = '') 
    {
        $books = new \Foobooks\Book();
        $allBooks = $books->all();
        return view('books.index')-> withBooks($allBooks);
    }
}
