<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ["title", "body", "category_id", "author", "image", "views"];

    public function category() {
        return $this->belongsTo("App\Category");
    }

    public function comments() {
        return $this->hasMany("App\Comment");
    }
}
