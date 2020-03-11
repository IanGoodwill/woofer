@extends('layout')

@section('title')
Create Post Form
@endsection

@section('content')

<h1 class="text-center"> Fill out this form to create a post!</h1>

@include('partials.errors')

<form method="post" action="{{ route( 'posts.store' ) }}">
    <div class="form-group container h-100">
        <div class="row h-100 justify-content-center align-items-center">
             <div class="col-10 col-md-8 col-lg-6">
    @csrf {{-- cross site request forgery. a security mesaure --}}

    <label for="content">
        <strong> Post Content: </strong>
        <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
    </label>

    <label for="picture">
    Select image to upload:
    <input type="file" name="pictureUpload" id="pictureUpload">
    </label>

    <input class="btn btn-primary btn-customized align-bottom" type="submit" value="Publish Post">
    
</form>
</div>
    </div>
</div>

@endsection