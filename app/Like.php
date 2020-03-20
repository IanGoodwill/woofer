<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{

    protected $fillable = ['likeable_id', 'likeable_type', 'profile_id']; 
    

    public function profiles()
    {
        return $this->belongsTo(Profile::class);
    }

    use SoftDeletes;

    protected $table = 'likeables';
    
    public function posts()
    {
        return $this->morphedByMany('App\Post', 'likeable');
    }

    public function comments()
    {
        return $this->morphedByMany('App\Post', 'likeable');
    }
    
}
