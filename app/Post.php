<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ["title", "body", "category_id", "author", "image", "views", "hot"];

    public function category() {
        return $this->belongsTo("App\Category");
    }

    public function comments() {
        return $this->hasMany("App\Comment")->where('approved', 1);
    }

    public function postAuthor() {
        return $this->belongsTo("App\User", 'author', 'id')->select('id', 'username', 'image', 'about');
    }

    public function scopeHotPosts($query) {
        return $query->select("id", "title", "author", "category_id", "created_at", "image")
            ->where("hot", 1)
            ->limit(3)
            ->orderBy("id", "desc");
    }
}
