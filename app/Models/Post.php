<?php
namespace App\Models;
use illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;


Class Post extends Model // tabel profil_posts
{
    protected $fillable = ['title', 'author', 'slug', 'body'];
}