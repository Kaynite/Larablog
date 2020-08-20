<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DailyViews extends Model
{
    protected $fillable = ['day', 'views'];
    public $timestamps = false;
}
