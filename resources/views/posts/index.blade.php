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

<p> List of Posts:</p>
@foreach($posts as $post)
<div class="card" style="width: 36rem;">

<ul>
        <div class="card-body"> 
            <li>
                <h3>
                    {{ $post->username }}
                </h3>
                <figure>
                    <img class="profilePic" class="img-responsive" src="{{ $post->picture }}" alt="Profile picture" style="width:10%" />
                </figure>
                <p>
                    {{ $post->content }}
                </p>
                @auth 
                <a href="{{ route('posts.edit', $post->id) }}">Edit Post</a>
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