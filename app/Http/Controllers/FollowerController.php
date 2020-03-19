<?php

namespace App\Http\Controllers;

use App\Follower;
use Illuminate\Http\Request;
use Auth;
use App\Post;
use App\Profile;
use App\User;
use App\Comment;

class FollowerController extends Controller
{
   
    public function followProfile(int $id)
    {
        if ( $user = Auth::user() ) 
        {
            $profile = Profile::where("user_id", "=", $user->id)->firstOrFail();

            $follower = New Follower;
            $follower->profile_id = $profile->id;
            $follower->follower_id = $id;
            $follower->followed = 1;
            $follower->save();

            return redirect('/posts')->with('success', 'Followers updated.');
        }
        if(! $user) {
    
            return redirect('/posts');
        }
    }

}