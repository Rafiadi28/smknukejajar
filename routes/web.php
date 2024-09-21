<?php
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['title'=>'Home']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Profil', 'posts' => Post::all()]);
});
Route::get('/posts/{post:slug}', function (Post $post) {

    return view('post', ['title' => 'Single post', 'post' => $post]);
});
Route::get('/authors/{user:username}', function (User $user) {

    return view('posts', ['title' => count ($user->posts) . ' Articles by ' . $user->name, 'posts' => $user->posts]);
});
Route::get('/categories/{category:slug}', function (Category $category) {

    return view('posts', ['title' =>  ' Articles in: ' . $category->name, 'posts' => $category->posts]);
});
Route::get('/kejuruan', function () {
    return view('kejuruan', ['title' => 'Kejuruan']);
});
Route::get('/bkk', function () {
    return view('bkk',['title' => 'BKK']);
});
Route::get('/ppdb', function () {
    return view('ppdb', ['title' => 'PPDB']);
});
