<?php

namespace Foobooks\Http\Controllers;

use Illuminate\Http\Request;
use Foobooks\Http\Requests;
use Foobooks\Http\Controllers\Controller;

class BooksController extends Controller
{
    //
    public function getIndex() 
    {
        return view('books.index');
    }
}
