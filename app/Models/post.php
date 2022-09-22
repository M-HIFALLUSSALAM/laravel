<?php

namespace App\Models;


class post 
{
    private static $blog_post = [
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

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
