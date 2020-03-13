@extends('layout')

@section('title')
Edit Comment
@endsection

@section('content')


<h1 class="text-center"> Use this form to edit your Comment!</h1>

@include('partials.errors')

<div class="container-fluid">
    <div class="row h-100 justify-content-center align-items-center">

<form method="post" action="{{ route( 'comments.update', $comment->id) }}">
<div class="form-group container h-100">

    @csrf {{-- cross site request forgery. a security mesaure --}}
    @method('PATCH')

    <label for="content">
        <strong> Comment content: </strong>
        <br>
        <textarea name="content" id="content" cols="30" rows="10">{{ $comment->content }}</textarea>
    </label>
    </div>

    <div class="form-group container h-100">
    <input class="btn btn-primary btn-customized align-bottom" type="submit" value="Update Comment">
    </div>

    <div class="form-group container h-100">
        <form action="{{ route('comments.destroy', $comment->id) }}" method="post">
                        @csrf 
                        @method('DELETE')
                        <input class="btn btn-danger" type="submit" value="Delete Comment">
        </form>  
    </div>

</form>

</div>
</div>

@endsection