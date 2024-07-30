@extends('layout.app')

@section('show-posts')
    <h1>Hello Poste Page</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Author</th>
                <th scope="col">createAt</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $item)
                <tr>
                    <td>{{ $item['title'] }}</td>
                    <td>{{ $item['description'] }}</td>
                    <td>{{ $item['author'] }}</td>
                    <td>{{ $item['createAt'] }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
