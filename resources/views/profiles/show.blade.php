@extends('layout')

@section('title')
View Profile
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center text-success">ItSolutionStuff.com</h3>

<br>
<br>
<br>



<h4> See single Profile</h4>

@include('partials.errors')

<figure>
    <img class="profilePic" class="rounded" class="img-responsive" src="{{ $profile->picture }}" alt="Profile picture" style="width:40%" />
</figure>

    <strong> Name: </strong>
        {{ $profile->username }}

        <br>

        <a href="{{ route('profile.follow', $profile->id ) }}">Follow Profile</a>

        <br>

        <a href="{{ route('profile.unfollow', $profile->id ) }}">Unfollow Profile</a>

        <br>

    <strong> Bio: </strong>
    <p>{{ $profile->bio }}</p>

    <strong> Recent Posts: </strong>
    @foreach($posts as $post)

  
        <strong>{{ $post->username }}</strong>
        <p>{{ $post->content }}</p>
   
            
    @endforeach

    </div>
            </div>
        </div>
    </div>
</div>
@endsection