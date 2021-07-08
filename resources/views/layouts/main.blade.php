<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votate! @yield('title')</title>
    <!-- Import Main CSS -->
    <link rel="stylesheet" href="{{ asset('site/css/main.css') }}">
    <!-- Import BS -->
    <link rel="stylesheet" href="{{ asset('site/bs/bootstrap.css') }}">
    <!-- Import Font Awesome -->
    <link rel="stylesheet" href="{{ asset('site/fa5/css/all.min.css') }}">
    <!-- Import Livewire Styles -->
    @livewireStyles

</head>

<body>
    @yield('html')
    <script src="{{ asset('site/js/jquery.js') }}"></script>
    <script src="{{ asset('site/js/bootstrap.bundle.js') }}"></script>
    @livewireScripts
    @yield('script')
</body>

</html>