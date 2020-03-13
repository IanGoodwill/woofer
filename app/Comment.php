<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Actuallymab\LaravelComment\Models\Comment as LaravelComment;

class Comment extends LaravelComment
{
    public function profiles()
    {
        return $this->belongsTo( 'App\Profile' );
    }

    public function posts()
    {
        return $this->belongsTo( 'App\Post' );
    }

}
