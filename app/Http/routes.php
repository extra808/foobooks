<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/practice', function() {
    echo App::environment();
});

Route::get('/update', function () {
    $secret = "hushhushsweetdarling";
    chdir('..');
    $cwd = getcwd();
    $dump = json_encode($_POST);
    exec('echo "git pull\n"' ."$cwd\n"  .$dump .' >> storage/file');

    return $cwd ."<br>". $dump;
});

Route::controllers(['books/{title?}' => 'BooksController']);
