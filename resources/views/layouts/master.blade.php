<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')|MyBlog</title>
</head>
<body>
    @include('layouts.partials.navigation')
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
