@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" alt="wejofe" class="rounded-circle w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
               <div class="d-flex align-content-center pb-3">
                   <div class="h4 mr-4">{{ $user->username }} Laravel</div>
<follow-button user_id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
               </div>

                @can('update', $user->profile)
                    <a href="/p/create">Add a Post</a>
                @endcan
                @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                @endcan
            </div>
            <div class="d-flex">
            <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
            <div class="pr-5"><strong>{{ $user->profile->followers->count() }}</strong> followers</div>
            <div class="pr-5"><strong>{{ $user->following->count() }}</strong> following</div>
            </div>
            <div class="pt-4"><strong>{{ $user->profile->title }}</strong></div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="https://felixnzioki99.wixsite.com/portfolio"><strong>{{ $user->profile->url }}</strong></a></div>
        </div>
    </div>
    <div class="row">
      @foreach($user-> posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{ $post->id }}">
            <img src="/storage/{{ $post->image }}" class="w-100">
            </a>
        </div>
          @endforeach
    </div>
</div>
@endsection
<script>
    import FollowButton from "../../js/components/followButton";
    export default {
        components: {FollowButton}
    }
</script>
