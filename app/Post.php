<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
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
