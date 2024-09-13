<?php
use illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;


Route::get('/', function () {
    return view('home',['title'=>'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Profil', 'posts' => Post::all()]);
});
Route::get('/posts/{post:slug}', function (Post $post) {

    return view('post', ['title' => 'Single post', 'post' => $post]);
});
Route::get('/kejuruan', function () {
    return view('kejuruan', ['title' => 'Page Kejuruan']);
});
Route::get('/bkk', function () {
    return view('bkk',['title' => 'Page BKK']);
});
Route::get('/ppdb', function () {
    return view('ppdb', ['title' => 'Page PPDB']);
});
