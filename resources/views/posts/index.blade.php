@extends('layout')


@section('title')
Posts Index
@endsection

@section('content')

@if ( session()->get('success') )
<div role="alert">
    {{ session()->get('success') }}
</div>
@endif

<p> List of Posts:</p>

<div class="card" style="width: 36rem;">
<ul>
    @foreach($posts as $post)
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
        </li>
    @endforeach
        </div>
</ul>
</div>
@endsection