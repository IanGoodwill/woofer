<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Actuallymab\LaravelComment\Contracts\Commentable;
use Actuallymab\LaravelComment\HasComments;

class Post extends Model
{
    use HasComments;
    //
    protected $fillable = array(  
        'content',
        'picture',
    );

    public function profiles()
    {
        return $this->belongsTo( 'App\Profile' );
    }

    public function comments()
    {
        return $this->hasMany( 'App\Comment' );
    }


}
