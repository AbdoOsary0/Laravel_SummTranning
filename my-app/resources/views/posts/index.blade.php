@extends('layout.app')

@section('edit-post')
    <div class="container mt-4">
        <h1 class="mb-4">Posts Page</h1>
        @if (!$posts->isEmpty())
            <table class="table table-striped table-responsive-md">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Content</th>
                        <th scope="col">Author</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $item)
                        <tr>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->content }}</td>
                            <td>{{ $item->user_id }}</td>
                            <td>{{ $item->created_at ? $item->created_at : 'No Time Added' }}</td>
                            <td class="d-flex">
                                <a href="{{ route('posts.show', ['id' => $item->id]) }}"
                                    class="btn btn-primary me-2">Show</a>
                                <a href="{{ route('posts.edit', ['id' => $item->id]) }}"
                                    class="btn btn-warning me-2">Update</a>
                                <form method="POST" action="{{ route('posts.destroy', ['id' => $item->id]) }}"
                                    class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="bg-warning text-center">No Posted Found
                <p><a href="{{ route('posts.create') }}">Add Posts</a></p>
            </div>
        @endif
        @if (session('SuccessMeg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <p><b>{{ session('SuccessMeg') }}</b></p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
@endsection
