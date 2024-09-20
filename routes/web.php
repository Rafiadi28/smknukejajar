<?php
use App\Models\Post;
use App\Models\User;
use illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['title'=>'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Profil', 'posts' => Post::all()]);
});
Route::get('/posts/{post:slug}', function (Post $post) {

    return view('post', ['title' => 'Single post', 'post' => $post]);
});
Route::get('/authors/{user}', function (User $user) {

    return view('posts', ['title' => 'Articles by'  .  $user->name, 'posts' => $user->posts]);
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
