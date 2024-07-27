<?php

use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page', 'nama' => 'Damar']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog Page', 'posts' => Post::all()]);
});

Route::get('/posts/{slug}', function($slug) {
    return view('post', ['title' => 'Single Post', 'post' => Post::find($slug)]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page', 'email' => 'damarsepti627@gmail.com']);
});
