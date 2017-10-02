<!doctype html>
<head lang="{{ app()->getLocale() }}">
    <link rel="stylesheet" type="text/css" href="style.css">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <title>Demo - {{$title or 'Boom'}}</title>
</head>
<body>

@include('nav')

@yield('container')

<footer>
    @yield('footer')
</footer>