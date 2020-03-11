@extends('layout')

@section('title')
Edit Post
@endsection

@section('content')


<h1 class="text-center"> Use this form to edit your Post!</h1>

@include('partials.errors')

<form method="post" action="{{ route( 'posts.update', $post->id) }}">
<div class="form-group container h-100">
        <div class="row h-100 justify-content-center align-items-center">
             <div class="col-10 col-md-8 col-lg-6">
    @csrf {{-- cross site request forgery. a security mesaure --}}
    @method('PATCH')

    <label for="content">
        <strong> Post content: </strong>
        <textarea name="content" id="content" cols="30" rows="10">{{ $post->content }}</textarea>
    </label>

    <input class="btn btn-primary btn-customized align-bottom" type="submit" value="Update Post">

</form>
</div>
    </div>
</div>

@endsection