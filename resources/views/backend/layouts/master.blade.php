<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/images/logo.ico" />
    <title>Belgorod | @yield('title')</title>
    @include('backend.includes.style_base')
    @stack('stack_css')
    @yield('css')
</head>
<style>
    .img-style {
        width: 38px !important;
        height: 38px !important;
    }

</style>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="/images/logo.ico" alt="AdminLTELogo" height="60" width="60">
        </div>
        <!-- Navbar -->
        @include('backend.includes.header')
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            @include('backend.includes.aside')
            <!-- Sidebar -->
            @include('backend.includes.sidebar')
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                @yield('content-header')
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                @yield('main')
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        @include('backend.includes.footer')
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    @include('backend.includes.script_base')
    @yield('scripts')
    @stack('stack_js')
</body>

</html>
