@extends('layouts.app')

@section('create-post')
    <div class="container">
        <h1>Create Post</h1>
        <form method="POST" action="{{ route('posts.store') }}">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title"
                    value='{{ old('title') ? old('title') : '' }}' required>
            </div>
            @error('title')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5" required>{{ old('content') ? old('content') : '' }} </textarea>
            </div>
            @error('content')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="vstack">
                <button type="submit" class="btn btn-primary">Create Post</button>

            </div>
        </form>
    </div>
@endsection
