<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Apps</title>

        <link rel="stylesheet" href="{{ asset('assets/css/apps.css') }}">

    </head>
    <body>
        @include('layouts/header')

        @yield('content')

        @include('layouts/header')

        <script src="{{ asset('assets/js/apps.js') }}"></script>
        
        @stack('script')

    </body>
</html>