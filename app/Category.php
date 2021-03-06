<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    protected $fillable = ['name', 'cover_image'];

    public $timestamps = false;

    public function posts()
    {
        return $this->hasMany("App\Post")->orderBy("id", "desc");
    }

    public function postsCount()
    {
        return $this->hasMany("App\Post")->count();
    }
}
