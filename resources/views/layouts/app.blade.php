<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <!--
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @stack('head')
</head>
<body id="page-top">

<div id="app">

    <!-- Navigation -->
    @include('navigation.top')

    <div id="wrapper">

        <!-- Sidebar -->
        @include('navigation.sidebar')

        <main id="content-wrapper">
            <div class="container-fluid">
                @yield('breadcrumbs')
                @yield('content')
            </div>

            <!-- Footer -->
            @include('navigation.footer')
        </main>
    </div>
</div>

@stack('modals')
@stack('scripts')
</body>
</html>
