<!DOCTYPE HTML>
<html>
<head>
    <title>@yield('title', 'Laravel.1')- Yanhk</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('layout._header')
    <div class="container">
        <div class="col-md-offset-1 col-md-10">
            @yield('content')
            @include('layout._footer')
        </div>

    </div>
</body>
</html>