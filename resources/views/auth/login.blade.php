<!doctype html>
<html lang="en">

<head>
    <title>Belgorod | Log in</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <LINK REL="SHORTCUT ICON" HREF="/images/logo.ico">

    <link rel=" stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="/frontend/css/style.css">
    @toastr_css
</head>

<body class="img js-fullheight" style="background-image: url(/images/LOL/Header/freljord-vaults.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-4">
                    <h1 style="font-size:2.5em" class="heading-section">LOG IN</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Have an account?<span><a style="color:white;text-decoration: none"
                                    href="{{ route('auth.register') }}"> Sign
                                    up</a></span></h3>
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div style="text-align: center;margin-bottom: 5px;">
                                    <strong style="margin-top:-5px;color:red">&emsp;* {{ $error }}</strong>
                                </div>
                            @endforeach
                        @endif

                        <form action="{{ route('auth.login') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                    placeholder="Email" name='email'
                                    value="{{ Illuminate\Support\Facades\Cookie::get('email') }}">
                            </div>
                            @error('email')
                                <div style="margin-top: -10px;margin-bottom: 5px;">
                                    <small style="margin-top:-5px;color:red">&emsp;* {{ $message }}</small>
                                </div>
                            @enderror

                            <div class="form-group">
                                <input id="password-field" type="password"
                                    class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                                    name='password'>
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            @error('password')
                                <div
                                    style="margin-top: -10px;
                                                                                                                                                                                margin-bottom: 5px;">
                                    <small style="margin-top:-5px;color:red">&emsp;* {{ $message }}</small>
                                </div>
                            @enderror
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-info">Sign
                                    In</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary" style="color:white;">Remember Me
                                        <input type="checkbox" checked name="remember">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a class="fp" href="#" style="color: #fff;text-decoration: none">Forgot
                                        Password</a>
                                </div>
                            </div>
                        </form>
                        <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
                        <div class="social d-flex text-center">
                            <a style="text-decoration: none" href="{{ url('auth/facebook') }}"
                                class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span>
                                Facebook</a>

                            <a style="text-decoration: none" href="{{ url('auth/google') }}"
                                class="px-2 py-2 ml-md-1 rounded">
                                <span class="ion-logo-twitter mr-2"></span>
                                Google</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

<script src="/frontend/js/jquery.min.js"></script>
<script src="/frontend/js/popper.js"></script>
<script src="/frontend/js/bootstrap.min.js"></script>
<script src="/frontend/js/main.js"></script>
@toastr_js
@toastr_render
