<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dracula @yield('title')</title>
    <LINK REL="SHORTCUT ICON" HREF="/images/trexicon.ico">
    @include('frontend.includes.style_base')
    @stack('stack_css')
    @yield('css')
</head>
@yield('style')
<style>
    @media (min-width: 768px) {
        .navbar-nav {
            margin: 0;
            margin-left: 15%;
        }

        .navbar-right {
            float: left !important;
            margin-right: -15px;

        }
    }

</style>

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
        @include('frontend.includes.sidebar')
        @yield('header')
        <div class="main">
            @yield('main')
            @include('frontend.includes.footer')
        </div>
        @include('frontend.includes.messenger')
        <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous"
                src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v12.0&appId=1210347269440000&autoLogAppEvents=1"
                nonce="oOrDO4rn"></script>
    </main>

</body>
@include('frontend.includes.script_base')
@yield('scripts')
@stack('stack_js')

</html>
