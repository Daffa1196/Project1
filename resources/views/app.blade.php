<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
    @vite('resources/css/app.css')
   
   
    <title>@yield('title')</title>
</head>

<body>
    @include('partials.header')

    <main class="">
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>
