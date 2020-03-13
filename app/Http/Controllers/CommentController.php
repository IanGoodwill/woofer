<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;
use App\Profile;
use App\User;
use App\Comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        if ( $user ) // we are logged in and can create posts
            return view('comments.create');
        else // not logged in, can not make posts. redirect to index
            return redirect('/posts');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ( $user = Auth::user() ) //only store data if user is logged in. 
        {

        $validatedData = $request->validate(array( 
            'content' => 'required|max:255',
           

        ));
        $profile = new Profile();

        $post = new Post();

        $comment = new Comment();
        $comment->post_id = $post->id;
        $post->content = $validatedData['content'];
        
        $post->save();
        
    
         return redirect('/posts')->with('success', 'Comment saved.');
        }// redirect by default
         return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comment = Comment::findOrFail($id);

        $commentProfile = $comment->profile()->get()[0];

        return view( 'comments.show', compact('comment'), compact('commentProfile') );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if ( $user = Auth::user() ) {
            $comment = Comment::findOrFail($id);

            return view( 'comments.edit', compact('comment') );
        }
        return redirect('/posts');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ( $user = Auth::user() ) {
            $validatedData = $request->validate(array( 
                'content' => 'required|max:255',
             ));
    
             Comment::whereId($id)->update($validatedData);
             return redirect('/posts')->with('success', 'Comment updated.');
            }
            return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ( $user = Auth::user() ) {
            $comment = Comment::findOrFail($id);
    
            $comment->delete();
    
            return redirect('/posts')->with('success', 'Comment deleted.');
        }
        return redirect('/posts');
    }
}
