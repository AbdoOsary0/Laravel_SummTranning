<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="/assets/images/logo.png" alt="logo" height="50" width="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('posts.index') }}">My Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('posts.create') }}">Create</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <!-- Additional navbar content, like user profile or login button -->
                </span>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('home')
        @yield('user-posts')
        @yield('show-post')
        @yield('edit-post')
        @yield('create-post')
    </div>

    <footer class="bg-dark text-white mt-5">
        <div class="container py-4">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <p>&copy; 2024 Your Company Name. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="/assets/js/bootstrap.bundle.js"></script>
</body>

</html>
