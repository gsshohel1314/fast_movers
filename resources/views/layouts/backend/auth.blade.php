<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">

    <link href="{{asset('public/content/backend')}}/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{asset('public/content/backend')}}/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="{{asset('public/content/backend')}}/assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
    <link href="{{asset('public/content/backend')}}/css/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="{{asset('public/content/backend')}}/css/helper.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/content/backend')}}/css/style.css" rel="stylesheet" type="text/css" 
</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="{{asset('public/content/backend')}}/js/jquery.min.js"></script>
    <script src="{{asset('public/content/backend')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('public/content/backend')}}/js/jquery.app.js"></script>
</body>
</html>
