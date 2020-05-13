<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Firetour</title>
        <!-- Favicon -->
        <link href="{{ asset('assets') }}/img/brand/favicon.png" rel="icon" type="image/png">

        <link type="text/css" href="https://colorlib.com/preview/theme/shopmax/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="https://colorlib.com/preview/theme/shopmax/fonts/icomoon/style.css" rel="stylesheet">
        <link type="text/css" href="https://colorlib.com/preview/theme/shopmax/css/magnific-popup.css" rel="stylesheet">
        <link type="text/css" href="https://colorlib.com/preview/theme/shopmax/css/aos.css" rel="stylesheet">
        <link type="text/css" href="https://colorlib.com/preview/theme/shopmax/css/style.css" rel="stylesheet">

    </head>
    <body>
        @yield('content')

        @stack('js')
    </body>
</html>
