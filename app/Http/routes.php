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

Route::match(['get', 'post'], '/update', function () {
    $secret = "hushhushsweetdarling";
    $file = 'storage/file';
    chdir('..');
    $cwd = getcwd();
    $dump = json_encode($_POST);
    exec('git pull');
    file_put_contents($file, $cwd ."\n". $dump ."\n");

    return $cwd ."<br>". $dump;
});

Route::controllers(['books/{title?}' => 'BooksController']);
