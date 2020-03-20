<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    public $timestamps = false;

    protected $guarded = [];

    protected $dates = ['deleted_at'];
    //
    protected $fillable = array(  
        'content',
        'picture',
        'likes_count'
    );

    public function profiles()
    {
        return $this->belongsTo( 'App\Profile' );
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }

    public function likes()
    {
        return $this->hasMany('App\Like');
    }

}
