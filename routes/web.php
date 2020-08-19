<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/contact', function () {
    $price = 5000000000;
    $descriptioon = "AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA";
    return view('contact')
        ->with('price', $price)
        ->with('description', $descriptioon);
});

Route::get('/', function () {
    return view('welcome');
})->name("start");

Route::view('/menu', 'menu');


//Route Parameter 
Route::get('/blog/{id}', function ($id) {
    $pages = [
        1 => ['title' => 'Hello Page 1 <div>hello</div>'],
        2 => ['title' => 'Hello Page 2'],
        3 => ['title' => 'Hello Page 3']
    ];
    return view('blog', ['data' => $pages[$id]]);
});
