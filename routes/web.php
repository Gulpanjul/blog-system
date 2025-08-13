<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Andhika Chandra Gulpa',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, alias temporibus est excepturi, sit sapiente nihil nulla assumenda maiores ipsa debitis suscipit voluptates, sed voluptatibus animi illo! Nulla, harum facilis.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Andhika Chandra Gulpa',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore officiis ducimus labore, consequatur quibusdam incidunt minus eos ex pariatur fuga sit laboriosam temporibus iure tenetur aut distinctio sed perspiciatis facere.'
        ],

    ];
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});

Route::get(
    '/posts/{slug}',
    function ($slug) {
        $posts = [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Andhika Chandra Gulpa',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, alias temporibus est excepturi, sit sapiente nihil nulla assumenda maiores ipsa debitis suscipit voluptates, sed voluptatibus animi illo! Nulla, harum facilis.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Andhika Chandra Gulpa',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore officiis ducimus labore, consequatur quibusdam incidunt minus eos ex pariatur fuga sit laboriosam temporibus iure tenetur aut distinctio sed perspiciatis facere.'
            ],
        ];
        $post = Arr::first($posts, function ($post) use ($slug) {
            return $post['slug'] == $slug;
        });

        if (!$post) abort(404);

        return view('post', ['title' => 'Single Post', 'post' => $post]);
    }
);

Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Us']);
});
