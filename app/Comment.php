<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    Use SoftDeletes;

    protected $fillable = ["comment_body", "comment_by", "post_id", "email", "website", "approved"];

    public function post()
    {
        return $this->belongsTo('App\Post')->select('id', 'title');
    }

    public function replies()
    {
        return $this->hasMany('App\Reply');
    }

    public function scopeApproved() {
        return $this->where('approved', 1);
    }

    public function scopePending() {
        return $this->where('approved', 0);
    }
}
