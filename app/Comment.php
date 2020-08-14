<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ["comment_body", "comment_by", "post_id"];


    public function post()
    {
        return $this->belongsTo('App\Post')->select('id', 'title');
    }

    public function replies()
    {
        return $this->hasMany('App\Reply');
    }
}
