<?php

namespace App\Http\Controllers;

use App\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function actOnPost(Request $request, $id)
    {
        $action = $request->get('action');
        switch ($action) {
            case 'Like':
                Post::where('id', $id)->increment('likes_count');
                break;
            case 'Unlike':
                Post::where('id', $id)->decrement('likes_count');
                break;
        }
        broadcast(new PostAction($id, $action))->toOthers();
        return '';
    }
    }
