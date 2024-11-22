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
    }

    public static function find($slug): array

    {

        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
        
        if(! $post) {
            abort(404);
        }

        return $post;
    }
}