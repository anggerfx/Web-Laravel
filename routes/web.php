<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view( 'home', [
        "title" => "Home"

    ] );
});



Route::get('/pelayanan', function () {
    return view( 'pelayanan',[
        "title" => "Pelayanan"
    ] );
});

Route::get('/daftaronline', function () {
    return view( 'daftaronline', [
        "title" => "Daftar Online"
    ] );
});

Route::get('/galeri', function () {
    return view( 'galeri', [
        "title" => "Galeri"
    ] );
});



Route::get('/blog', function () {
    $blog_posts = [

        [
            "title" => "Judul Posts Pertama",
            "slug" => "judul-post-pertama",
            "author" => "RSUD Kanjuruhan",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae aperiam rem explicabo ab tempora ipsa perferendis earum repellat aspernatur veniam quasi corrupti provident obcaecati vero molestias deleniti eum assumenda a, magnam sint velit ipsam eius repellendus! Dolore, dignissimos nihil aspernatur aut neque officiis atque quidem nobis illo perferendis sit blanditiis earum ducimus repellendus at autem iste minus nostrum cupiditate maiores magni odit est illum! Neque error quaerat optio cupiditate nobis ut culpa blanditiis voluptatum excepturi, deleniti facere exercitationem distinctio expedita."
        ],
        [
            "title" => "Judul Posts Kedua ",
            "slug" => "judul-post-kedua",
            "author" => "RSUD Kanjuruhan",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae aperiam rem explicabo ab tempora ipsa perferendis earum repellat aspernatur veniam quasi corrupti provident obcaecati vero molestias deleniti eum assumenda a, magnam sint velit ipsam eius repellendus! Dolore, dignissimos nihil aspernatur aut neque officiis atque quidem nobis illo perferendis sit blanditiis earum ducimus repellendus at autem iste minus nostrum cupiditate maiores magni odit est illum! Neque error quaerat optio cupiditate nobis ut culpa blanditiis voluptatum excepturi, deleniti facere exercitationem distinctio expedita."
        ]
    ]
    ;
    return view( 'posts', [
        "title" => "posts", 
        "posts" => $blog_posts
        ] );
});

Route::get('/about', function () {
    return view( 'about', [
        "title" => "About"
        ] );
});

// halaman single post

Route::get('post/{slug}', function ($slug) {
    return view( 'post', [
        "title" => "Single Post"
        ] );
});