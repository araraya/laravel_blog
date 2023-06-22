<?php

namespace App\Models;

class Post
{
    static $blog_posts = [
        [
            "title" => "Cobain",
            "slug" => 'cobain',
            "author" => "Arya",
            "post" => "manuansisiasndaidaisdniandiansdiandiasndinasdisandiansdhaosfhaoshfksdjoid"
        ],
        [
            "title" => "Cobain 2",
            "slug" => 'cobain-2',
            "author" => "Arya DD",
            "post" => "manuansisiasndaidaisdniandiansdiandiasndinasdisandiansdhaosfhaoshfksdjoid"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }


    // Post::create([
    //     'title'=> 'Judul Pertama',
    //     'slug'=> 'judul-pertama',
    //     'category_id' => 1,
    //     'excerpt'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
    //     'body'=>'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
    // ]);

    // Post::create([
    //     'title'=> 'Judul Kedua',
    //     'slug'=> 'judul-kedua',
    //     'category_id' => 1,
    //     'excerpt'=> 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable.',
    //     'body'=> '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.</p><p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>'
    // ])

    // Post::create([
    //     'title'=> 'Judul Ketiga',
    //     'slug'=> 'judul-ketiga',
    //     'category_id' => 3,
    //     'excerpt'=> 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable.',
    //     'body'=> '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.</p><p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>'
    // ])

    // Category::create([
    //     'name'=>'Programming',
    //     'slug'=>'programming'
    // ])
    // Category::create([
    //     'name'=>'Web Design',
    //     'slug'=>'web-design'
    // ])
    // Category::create([
    //     'name'=>'Personal',
    //     'slug'=>'personal'
    // ])
}