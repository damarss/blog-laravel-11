<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Damar']);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            'title' => 'Postingan 1',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nesciunt beatae veritatis modi maxime. Id nostrum deleniti, optio rem consectetur minus beatae perferendis nulla, odio vero obcaecati deserunt qui totam repudiandae voluptatibus rerum aspernatur libero eos. Dolorem quos debitis eos eligendi animi iure vitae non veniam optio earum, deleniti accusamus.',
        ],
        [
            'title' => 'Postingan 2',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum nesciunt beatae veritatis modi maxime. Id nostrum deleniti, optio rem consectetur minus beatae perferendis nulla, odio vero obcaecati deserunt qui totam repudiandae voluptatibus rerum aspernatur libero eos. Dolorem quos debitis eos eligendi animi iure vitae non veniam optio earum, deleniti accusamus.',
        ],
    ];

    return view('blog', ['posts' => $blog_posts]);
});

Route::get('/contact', function () {
    return view('contact', ['email' => 'damarsepti627@gmail.com']);
});
