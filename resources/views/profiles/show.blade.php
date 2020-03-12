@extends('layout')

@section('title')
View Profile
@endsection

@section('content')


<h4> See single Profile</h4>

@include('partials.errors')

<figure>
    <img class="profilePic" class="rounded" class="img-responsive" src="{{ $profile->picture }}" alt="Profile picture" style="width:40%" />
</figure>

    <strong> Name: </strong>
        {{ $profile->username }}

    <p>{{ $profile->bio }}</p>
   
       
   
 

@endsection