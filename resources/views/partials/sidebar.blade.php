
@if ( session()->get('success') )
    <div role="alert">
    {{ session()->get('success') }}
    </div>
@endif

<br>
<br>
<br>
<br>
<br>


<div class="float-right" class="mt-5">

<h2> Welcome, {{ $post->username }} </h2>

<figure class="mt-9">
    <img class="profilePic" class="rounded" class="img-responsive" src="{{ $post->picture }}" alt="Profile picture" style="width:40%" />
</figure>

{{-- 
<a class="navbar-brand" href="{{ route('profiles.edit', $profile->id) }}"> Edit Profile </a>

<a class="navbar-brand" href="{{ route('posts.edit', $post->id) }}"> Edit Posts </a>
--}}

</div> 