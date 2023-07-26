<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Laravel Blade Template</title>
</head>
<body>
    @yield('nav')
    <div class="container">
        @yield('content')
    </div>
    @yield('footer')
</body>
</html>