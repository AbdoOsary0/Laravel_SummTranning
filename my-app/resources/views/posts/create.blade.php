@extends('layout.app')

@section('create')
    <h1>Hello Create Page</h1>
    <div class="container">
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">title</label>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="input-group">
                <label for="">Content</label>
                <textarea class="form-control" aria-label="With textarea"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
