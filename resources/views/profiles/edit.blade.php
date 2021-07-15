@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h1>Edit Profile</h1>
                    </div>
                    <div class="form-group row">
                        <label for="Title" class="col-md-4 col-form-label">Title</label>
                        <input id="title"
                               type="text"
                               class="form-control @error('caption') is-invalid @enderror" name="title"
                               value="{{ old('title') ?? $user->profile->title }}"
                               required autocomplete="title" autofocus>

                        @error('title')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>
                    <div class="form-group row">
                        <label for="Description" class="col-md-4 col-form-label">Description</label>
                        <input id="description"
                               type="text"
                               class="form-control @error('caption') is-invalid @enderror" name="description"
                               value="{{ old('description') ?? $user->profile->description }}"
                               required autocomplete="description" autofocus>

                        @error('description')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>
                    <div class="form-group row">
                        <label for="URL" class="col-md-4 col-form-label">URL</label>
                        <input id="url"
                               type="text"
                               class="form-control @error('url') is-invalid @enderror" name="url"
                               value="{{ old('url') ?? $user->profile->url }}"
                               required autocomplete="url" autofocus>

                        @error('url')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>

                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label">Profile Image</label>

                        <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image">
                        @error('image')
                        <strong>{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="row pt-4">
                        <button class="btn btn-primary">Save Profile</button>
                    </div>

                </div>
            </div>
    </div>
@endsection
