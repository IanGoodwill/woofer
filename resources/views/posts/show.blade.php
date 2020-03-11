@extends('layout')

@section('title')
View Post
@endsection

@section('content')


<h4> See posts one by one</h4>

@include('partials.errors')


    @csrf {{-- cross site request forgery. a security measure --}}
    @method('PATCH')

        <p>{{ $post->content }}</p>
   
        <strong> Name: </strong>
        {{ $postProfile->username }}
   
 

@endsection