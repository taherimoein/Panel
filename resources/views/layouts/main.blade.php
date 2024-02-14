<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Css -->
    @vite('resources/css/app.css')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <title>Panel @yield("title")</title>
</head>

<body class="flex flex-col min-h-screen">
    <div class="flex-grow">
        @yield('content')
    </div>
    
    <footer class="border-2 border-gray-100">
        <p class="text-gray-400 text-base text-center m-5">Copyright 2024 &#169;Panel</p>
    </footer>
</body>

</html>
