
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

<h2> Welcome, {{ $profile->username }} </h2>

<figure class="mt-9">
    <img class="rounded-circle z-depth-2"  class="img-responsive" src="{{ $post->picture }}" alt="Profile picture" style="width:40%" />
</figure>


<a href="{{ route('profiles.edit', $profile->id) }}" class="navbar-brand" class="nav-link" class="text-center" >Edit Profile</a>

<br>

<a href="{{ route('profiles.show', $profile->id) }}" class="navbar-brand" class="nav-link" class="text-center" >View Profile</a>

<br>
<!--
<a class="navbar-brand" class="text-center" href="{{ route('posts.edit', $post->id) }}"> Edit Posts </a>
-->

</div> 