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
        $title = $title == '' ? '' : $title;
        return view('books.index')-> withTitle($title);
    }
}
