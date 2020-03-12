@extends('layout')

@section('title')
Update Profile Form
@endsection

@section('content')

<h1 class="text-center"> Fill out this form to create a profile!</h1>

@include('partials.errors')

<form method="post" action="{{ route( 'profiles.store' ) }}" enctype="multipart/form-data">
    <div class="form-group container h-100">
        <div class="row h-100 justify-content-center align-items-center">
             <div class="col-10 col-md-8 col-lg-6">
    @csrf {{-- cross site request forgery. a security mesaure --}}

    <label for="bio">
        <strong> Update Post Content: </strong>
        <textarea class="form-control" name="bio" id="bio" cols="30" rows="10"> {{ $profile->bio }} </textarea>
    </label>

    <label for="picture">
    Select image to upload:
    <input type="file" name="picture" id="picture">
    </label>

    <input class="btn btn-primary btn-customized align-bottom" type="submit" value="Update Profile">
    
</form>
</div>
    </div>
</div>

@endsection