@extends('layouts.app')

@section('content')
    <div class="container">
    @foreach($posts as $post)
            <div class="row">
                <div class="col-6 offset-3">
                    <a href="/profile/{{ $post->user->id }}">
                    <img src="/storage/{{ $post->image }}" alt="Loading" class="col-7 w-100">
                    </a>
                </div>
            </div>
        <div class="row pt-2 pb-4">
                <div class="col-6 offset-3 d-flex d-lg-inline-flex">
                    <div>
                        <div class="d-flex align-content-center">
                            <div class="pr-3">
                                <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-width: 40px;">
                            </div>
                            <div>
                                <div class="font-weight-bold"><a href="/profile/{{ $post->user->id }}">
                                        <span class="text-dark">{{ $post->user->username }}</span>
                                    </a>
                                    <a href="#" class="pl-3">Follow</a>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <p>
                            <span class="font-weight-bold">
                                <a href="/profile/{{ $post->user->id }}">
                                <span class="text-dark">{{ $post->user->username }}</span>
                                </a>
                            </span>
                            {{ $post->caption }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach

        <div class="row">
            <div class="col-5 d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
@endsection
