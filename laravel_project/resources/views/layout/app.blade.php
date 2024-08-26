
</html>
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<nav>
    <div class="logo">JustMe 젤</div>
    <div class="nav-links">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ url('/content') }}">Content</a>
    </div>
</nav>


    <div class="content">
        @yield('content')
    </div>

    <footer>
        <div class="footer-content">
            <p>&copy; 2024 JustMe 안젤라</p>
            <p>Follow me on <a href="#">Instagram</a> | <a href="#">Twitter</a> | <a href="#">Facebook</a></p>
        </div>
    </footer>
</body>
</html>
