<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all() {
        return [
            [
                'id' => 1,
                'slug' => 'postingan-1',
                'title' => 'Postingan 1',
                'author' => 'Damar S',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nesciunt beatae veritatis modi maxime. Id nostrum deleniti, optio rem consectetur minus beatae perferendis nulla, odio vero obcaecati deserunt qui totam repudiandae voluptatibus rerum aspernatur libero eos. Dolorem quos debitis eos eligendi animi iure vitae non veniam optio earum, deleniti accusamus.',
            ],
            [
                'id' => 2,
                'slug' => 'postingan-2',
                'title' => 'Postingan 2',
                'author' => 'Tian Agra',
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nesciunt beatae veritatis modi maxime. Id nostrum deleniti, optio rem consectetur minus beatae perferendis nulla, odio vero obcaecati deserunt qui totam repudiandae voluptatibus rerum aspernatur libero eos. Dolorem quos debitis eos eligendi animi iure vitae non veniam optio earum, deleniti accusamus.',
            ],
        ];
    }    

    public static function find($slug) {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
