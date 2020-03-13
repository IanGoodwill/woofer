<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends LaravelComment
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['profile_id', 'post_id', 'parent_id', 'content'];

    public function profiles()
    {
        return $this->belongsTo( 'App\Profile' );
    }

    public function posts()
    {
        return $this->belongsTo( 'App\Post' );
    }

    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }

}
