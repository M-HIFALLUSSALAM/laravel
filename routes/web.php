<?php


use App\Http\Controllers\PostControler;
use Illuminate\Support\Facades\Route;
use App\Models\post;

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

Route::get('/', function () {
    return view('home', [
        "title" => "home",
        "image" => "bg1.jpg"
    ]);
});

Route::get('/about', function () {

    return view('about', [
        "title" => "about",
        "nama" => "Muhammad Hifallussalam",
        "email" => "hifalmuhammad43@gmail.com",
        "image" => "burung1.jpg"

    ]);
});

Route::get('/blog', [PostControler::class, 'index']);

Route::get('posts/{slug}', [PostControler::class, 'show']);
