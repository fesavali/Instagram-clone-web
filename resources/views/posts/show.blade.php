@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{ $post->image }}" alt="Loading" class="col-7 w-100">
            </div>
            <div class="col-4 d-flex d-lg-inline-flex">
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
    </div>
@endsection
