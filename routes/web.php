<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Rivaldy Novyan Dwi Putra', 'title' => 'Contact']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Rivaldy Novyan Dwi Putra',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Cupiditate nam accusantium esse neque repudiandae totam, 
            at officiis praesentium quas, officia quidem eligendi facilis 
            sapiente ex voluptas, minus corrupti. Eos, earum.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Rivaldy Novyan Dwi Putra',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Cupiditate nam accusantium esse neque repudiandae totam, 
            at officiis praesentium quas, officia quidem eligendi facilis 
            sapiente ex voluptas, minus corrupti. Eos, earum!'
        ]
    ]]);
});

Route::get('/posts/{slug}', function($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Rivaldy Novyan Dwi Putra',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Cupiditate nam accusantium esse neque repudiandae totam, 
            at officiis praesentium quas, officia quidem eligendi facilis 
            sapiente ex voluptas, minus corrupti. Eos, earum.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Rivaldy Novyan Dwi Putra',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Cupiditate nam accusantium esse neque repudiandae totam, 
            at officiis praesentium quas, officia quidem eligendi facilis 
            sapiente ex voluptas, minus corrupti. Eos, earum!'
        ]
     ];

        $post = Arr::first($posts, function ($post) use ($slug){
            return $post['slug'] ==  $slug;
        });

        return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});