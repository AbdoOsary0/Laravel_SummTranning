@extends('layout.app')

@section('show-post')
    <div class="container mt-4">
        <h1 class="mb-4">Post Details</h1>
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title mb-0">{{ $post->title }}</h5>
            </div>
            <div class="card-body">
                <p class="card-text">{{ $post->content }}</p>
                <p class="card-text"><small class="text-muted">Posted on:
                        {{ $post->created_at ? $post->created_at : 'No time added' }}</small></p>
            </div>
            <div class="card-footer text-end">
                <a href="{{ route('posts.edit', ['id' => $post->id]) }}" class="btn btn-warning me-2">Edit</a>
                <form method="POST" action="{{ route('posts.destroy', ['id' => $post->id]) }}" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
