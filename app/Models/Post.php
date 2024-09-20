<?php
namespace App\Models;
use illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

Class Post extends Model // tabel profil_posts
{
    use Hasfactory;
    protected $fillable = ['title', 'author', 'slug', 'body'];
public function author():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

