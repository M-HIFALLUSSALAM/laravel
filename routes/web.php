<?php


use App\Http\Controllers\PostControler;
use App\Models\category;
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
        "bio" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam perferendis, repudiandae nobis autem quas quia placeat minus, minima, facere error quasi sapiente voluptates ducimus officiis iure vitae possimus deleniti alias. Molestiae repellendus id, commodi deserunt quis cumque eaque esse magnam a magni atque ipsum iste odit doloribus! Inventore, praesentium mollitia?",
        "email" => "hifalmuhammad43@gmail.com",
        "image" => "burung1.jpg"

    ]);
});

Route::get('/blog', [PostControler::class, 'index']);

Route::get('posts/{post:slug}', [PostControler::class, 'show']);

Route::get('/categories', function() {
    return view('cetegories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
} );