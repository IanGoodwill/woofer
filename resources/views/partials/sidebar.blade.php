
@if ( session()->get('success') )
    <div role="alert">
    {{ session()->get('success') }}
    </div>
@endif

<h2> {{ $profile->username }} </h2>

<figure>
    <img class="profilePic" class="img-responsive" src="{{ $profile->picture }}" alt="Profile picture" style="width:10%" />
</figure>

<a class="navbar-brand" href="{{ route( 'profiles.edit') }}"> Edit Profile </a>

<a class="navbar-brand" href="{{ route( 'posts.edit') }}"> Edit Posts </a>