<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Actuallymab\LaravelComment\CanComment;

class Profile extends Model
{
    use CanComment;

    public function users()
    {
        return $this->belongsTo( 'App\User' );
    }

    public function comments()
    {
        return $this->hasMany( 'App\Comment' );
    }

    public function posts()
    {
        return $this->hasMany( 'App\Post' );
    }

    protected $fillable = [
        'username', 'user_id', 'bio', 'picture'
    ];
}
