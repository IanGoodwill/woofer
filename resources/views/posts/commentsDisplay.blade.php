@foreach($comments as $comment)
    <div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
        <strong>{{ $post->username }}</strong>
        <p>{{ $comment->content }}</p>
        <a href="" id="reply"></a>
        <form method="post" action="{{ route('comments.store') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="content" class="form-control" />
                <input type="hidden" name="post_id" value="{{ $post_id }}" />
                <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
            </div>
            @auth
            <div class="form-group">
                <input type="submit" class="btn btn-warning" value="Reply" />
            </div>
        </form>

            <div class="form-group">
                <a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-primary">Edit Comment</a>
            </div>
       
        <div class="form-group">
        <form action="{{ route('comments.destroy', $comment->id) }}" method="post">
            @csrf 
            @method('DELETE')
            <input class="btn btn-danger" type="submit" value="Delete Comment">
        </form>
        </div>  
       

        @include('posts.commentsDisplay', ['comments' => $comment->replies])
        </div>
        @endauth
@endforeach