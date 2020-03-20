<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{

    protected $fillable = ['likes_id', 'likeable_type', 'profile_id']; 
    

    public function profiles()
    {
        return $this->belongsTo(Profile::class);
    }

    use SoftDeletes;

    protected $table = 'likes';
    
    public function posts()
    {
        return $this->belongsTo('App\Like');
    }

    public function comments()
    {
        return $this->belongsTo('App\Like');
    }
    
}
