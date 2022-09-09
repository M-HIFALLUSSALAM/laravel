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

Route::get('/', function () {
    return view('home', [
        "title" => "home"
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

Route::get('/blog', function () {

$blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Hifal",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab magni cum earum beatae non provident iusto, praesentium cupiditate natus porro? Est iusto qui repudiandae, minus quaerat voluptatibus tenetur debitis quidem quo blanditiis enim rerum maxime labore recusandae ab, ex quia voluptatem ipsum dolor veritatis corporis earum mollitia repellendus corrupti? Quos."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Jembar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. At provident ad architecto error inventore maxime, exercitationem cupiditate eveniet asperiores, officiis distinctio labore tenetur eos totam, adipisci obcaecati quam iusto sint earum itaque nobis. Laudantium totam cupiditate magni eligendi at provident et maxime, a explicabo ipsum laboriosam, voluptates ex perferendis est alias iure autem magnam dignissimos nobis tempore! Officia inventore accusantium, a mollitia nostrum vel facere. Ad maxime id adipisci, ea nostrum et perspiciatis aut ,ullam quod veniam atque inventore porro!"
        ],
    ];
    return view('posts', [
        "title" => "post",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function($slug) {

    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Hifal",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab magni cum earum beatae non provident iusto, praesentium cupiditate natus porro? Est iusto qui repudiandae, minus quaerat voluptatibus tenetur debitis quidem quo blanditiis enim rerum maxime labore recusandae ab, ex quia voluptatem ipsum dolor veritatis corporis earum mollitia repellendus corrupti? Quos."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Jembar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. At provident ad architecto error inventore maxime, exercitationem cupiditate eveniet asperiores, officiis distinctio labore tenetur eos totam, adipisci obcaecati quam iusto sint earum itaque nobis. Laudantium totam cupiditate magni eligendi at provident et maxime, a explicabo ipsum laboriosam, voluptates ex perferendis est alias iure autem magnam dignissimos nobis tempore! Officia inventore accusantium, a mollitia nostrum vel facere. Ad maxime id adipisci, ea nostrum et perspiciatis aut ,ullam quod veniam atque inventore porro!"
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] == $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "single post",
        "post" => $new_post
    ]);
});
