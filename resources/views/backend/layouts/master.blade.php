<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
  ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/logo.ico" />
    <!-- Google Fonts
  ============================================ -->
    @include('backend.includes.style_base')
    @yield('css')
    @stack('stack_css')
</head>
<style>
    .active {
        font-weight: bold;

    }

    .active-icon {
        color: red;
    }

</style>

<body>
    <!-- Start Header menu area -->

    @include('backend.includes.sidebar')



    <!-- End Header menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        @include('backend.includes.header')
        <br>
        @yield('main')
        <br>
        @include('backend.includes.footer')
    </div>


    @include('backend.includes.script_base')
    @stack('stack_js')
    @yield('js')
</body>

</html>
