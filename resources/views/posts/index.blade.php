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
<ul>
    @foreach($posts as $post)
        <li>
            <h3>
                {{ $post->username }}
            </h3>
            <figure>
                <img src="{{ $post->picture }}" />
            </figure>
            <p>
                {{ $post->content }}
            </p>
        </li>
    @endforeach

</ul>

@endsection