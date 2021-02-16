@extends('layout')

@section('title')
View Post
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

                    <h4> See posts one by one</h4>
                    @include('partials.errors')

                    <strong> Username: </strong>
                    <br>

                    {{ $profile->username ?? '' }}
                    <br>

                    <strong> Content: </strong>
                    <br>

                    <p>{{ $post->content }}</p>

                    <h4>Display Comments</h4>

                    @include('posts.commentsDisplay', ['comments' => $post->comments, 'post_id' => $post->id])

                    <h4>Add comment</h4>

                    <section>
                        @if( $comment->is_gif == TRUE )
                        <figure>
                            <img src="{{ $comment->content }}">
                        </figure>
                        @else
                        <p>
                            {{ $comment->content }}
                        </p>
                        @endif
                    </section>

                    <a href="#" id="reply"></a>


                    <div id="app">
                        <comment-create-form submission-url="{{route('comments.store')}}" comment-id="{{ $comment->id }}" v-model="content">
                            @csrf
                        </comment-create-form>
                        <Giphy v-on:image-clicked="imageClicked" />
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection