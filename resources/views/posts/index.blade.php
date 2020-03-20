@extends('layout')


@section('title')
Woofer
@endsection

@section('content')

@if ( session()->get('success') )
<div role="alert">
    {{ session()->get('success') }}
</div>
@endif


@foreach($posts as $post)
<div class="card" style="width: 36rem;">

    <ul>
        <div class="card-body"> 
            <li> 
                <a href="{{ route('profiles.show', $post->profile_ID) }}" class="text-dark" class="nav-link" >{{ $post->username }}</a>
                
               
                <figure>
                    <img class="rounded-circle z-depth-2" class="img-responsive" src="{{ $post->picture }}" alt="Profile picture" style="width:10%" />
                </figure>

                <p>
                    {{ $post->content }}    
                </p>

                @auth 
                <a href="{{ route('posts.show', $post->id ) }}" class="btn btn-primary">View Post</a>
                
                <a href="{{ route('posts.edit', $post->id ) }}" class="btn btn-primary">Edit Post</a>
                
                <div class="float-right">
                    <button  onclick="actOnPost(event);" data-post-id="{{ $post->id }}">Like</button>
                    <span id="likes-count-{{ $post->id }}">{{ $post->likes_count }}</span>
                </div>
            
                @endauth
               
            </li>
        </div>       
    </ul>
</div>
@endforeach
@endsection

@auth 
@include('partials.sidebar')
@endauth