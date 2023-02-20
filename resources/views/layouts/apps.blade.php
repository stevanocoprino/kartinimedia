<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Apps</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('assets/css/apps.css') }}">

    </head>
    <body>
        @include('layouts/header')

        @yield('content')

        @include('layouts/footer')

        <script src="{{ asset('assets/js/apps.js') }}"></script>
        
        @stack('script')

    </body>
</html>