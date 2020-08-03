<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} | @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('frontend/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon.png') }}" />
    @yield('style')

</head>

<body>
    <div id="app" class="container-scroller">

        @yield('header')
        <main class="">
            @if (session('status'))
            <div class="w-50 fixed-top-right alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('status') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            @yield('content')
        </main>

        @yield('footer')

    </div>

    <script src="{{ asset('frontend/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('frontend/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{ asset('frontend/js/off-canvas.js') }}"></script>
    <script src="{{ asset('frontend/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('frontend/js/misc.js') }}"></script>
    <script src="{{ asset('frontend/js/dashboard.js') }}"></script>
    <script src="{{ asset('frontend/js/todolist.js') }}"></script>
    @yield('script')

</body>

</html>
