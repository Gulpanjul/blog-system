<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
    }

    public static function find($slug)
    {
        return Arr::first(static::all(), fn($post) => $post['slug'] == $slug) ?? abort(404);
    }
}
