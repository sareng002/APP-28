<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favico_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favico_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favico_io/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    {{-- css bootsrap 5.0 --}}
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/mycss.css">

    {{-- js poper --}}
    <script src="/js/app.js"></script>
    <title>{{ config('app.name') }}</title>
   
</head>
    <body>
            @include('layouts.navbar')
            @yield('main')
    </body>
</html>