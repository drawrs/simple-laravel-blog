<!DOCTYPE html>
<html>
<head>
    <title>@yield('title') | Larablog</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body>
    <div class="wrapper">
        <h1>Larablog</h1>
        <hr>
        <a href="/">Home</a> &bullet; 
        <a href="/about">About Us</a> &bullet; 
        <a href="/contact">Contact</a>
        <hr>
        <section id="content">
            @yield('content')
        </section>
        <section id="sidebar">
            <h3>Categories</h3>
            <ul>
                @foreach($categories as $category)
                    <li><a href="{{ route('category', [$category->id]) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </section>
        <div class="clearfix"></div>
    </div>
</body>
</html>