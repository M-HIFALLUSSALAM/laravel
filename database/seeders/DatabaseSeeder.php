<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\category;
use App\Models\post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // user::create([
            //     'name' => 'hifal',
            //     'email' => 'hifal@gmail.com',
            //     'password' => bcrypt('12345')
            // ]);
            
            // user::create([
                //     'name' => 'Salam',
                //     'email' => 'salam@gmail.com',
                //     'password' => bcrypt('123456')
                // ]);
                
        // User::factory(3)->create();

        // category::create([
        //     'name' => 'web programming',
        //     'slug' => 'web-programming'
        // ]);

        // category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);

        post::factory(5)->create();

        // post::create([
        //     'title' => 'judul pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit modi sequi fugiat quasi, soluta exercitationem nihil.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit modi sequi fugiat quasi, soluta exercitationem nihil. Expedita ea vel provident. Ab numquam, temporibus nam, odio obcaecati, provident odit in eaque nobis maiores pariatur natus! Reiciendis sunt sint ipsam quo veniam eos explicabo quos fugiat nobis, consectetur expedita et doloremque veritatis atque eius sequi asperiores exercitationem! Non pariatur ea vel officia esse, nemo recusandae laboriosam. Temporibus, alias. Dolor omnis itaque nostrum illum? Fuga nobis iste dolor iusto, corporis voluptatibus amet quisquam. Error, dolorem veritatis, vero asperiores vitae sit dignissimos id pariatur ducimus amet temporibus hic doloribus neque. Sit atque itaque accusantium.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // post::create([
        //     'title' => 'judul kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit modi sequi fugiat quasi, soluta exercitationem nihil.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit modi sequi fugiat quasi, soluta exercitationem nihil. Expedita ea vel provident. Ab numquam, temporibus nam, odio obcaecati, provident odit in eaque nobis maiores pariatur natus! Reiciendis sunt sint ipsam quo veniam eos explicabo quos fugiat nobis, consectetur expedita et doloremque veritatis atque eius sequi asperiores exercitationem! Non pariatur ea vel officia esse, nemo recusandae laboriosam. Temporibus, alias. Dolor omnis itaque nostrum illum? Fuga nobis iste dolor iusto, corporis voluptatibus amet quisquam. Error, dolorem veritatis, vero asperiores vitae sit dignissimos id pariatur ducimus amet temporibus hic doloribus neque. Sit atque itaque accusantium.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // post::create([
        //     'title' => 'judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit modi sequi fugiat quasi, soluta exercitationem nihil.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit modi sequi fugiat quasi, soluta exercitationem nihil. Expedita ea vel provident. Ab numquam, temporibus nam, odio obcaecati, provident odit in eaque nobis maiores pariatur natus! Reiciendis sunt sint ipsam quo veniam eos explicabo quos fugiat nobis, consectetur expedita et doloremque veritatis atque eius sequi asperiores exercitationem! Non pariatur ea vel officia esse, nemo recusandae laboriosam. Temporibus, alias. Dolor omnis itaque nostrum illum? Fuga nobis iste dolor iusto, corporis voluptatibus amet quisquam. Error, dolorem veritatis, vero asperiores vitae sit dignissimos id pariatur ducimus amet temporibus hic doloribus neque. Sit atque itaque accusantium.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // post::create([
        //     'title' => 'judul ke empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit modi sequi fugiat quasi, soluta exercitationem nihil.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit modi sequi fugiat quasi, soluta exercitationem nihil. Expedita ea vel provident. Ab numquam, temporibus nam, odio obcaecati, provident odit in eaque nobis maiores pariatur natus! Reiciendis sunt sint ipsam quo veniam eos explicabo quos fugiat nobis, consectetur expedita et doloremque veritatis atque eius sequi asperiores exercitationem! Non pariatur ea vel officia esse, nemo recusandae laboriosam. Temporibus, alias. Dolor omnis itaque nostrum illum? Fuga nobis iste dolor iusto, corporis voluptatibus amet quisquam. Error, dolorem veritatis, vero asperiores vitae sit dignissimos id pariatur ducimus amet temporibus hic doloribus neque. Sit atque itaque accusantium.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
