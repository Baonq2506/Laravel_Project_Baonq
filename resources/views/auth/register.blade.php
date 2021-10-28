<!doctype html>
<html>

<head>
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />

    <link rel="stylesheet" href="https://use.fontawesome.com/ed8913978e.css">
    <!-- fonts -->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <!-- /fonts -->
    <!-- css -->
    <link href="/frontend/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/frontend/css/register.css" rel='stylesheet' />
    <LINK REL="SHORTCUT ICON" HREF="/images/logo.ico">
    <!-- /css -->
</head>
<style>
    body {
        background: url(/images/LOL/Header/shurima-ruins.jpg) no-repeat;
    }

    .content-w3ls .content-agile1 {
        background: url(/images/LOL/Header/pexels-photo-3222686.jpeg) no-repeat;
    }

    input#firstname,
    input#email,
    input#password1,
    input#password2 {
        width: 85%;
    }

    input.register {
        width: 180px;
        margin-left: 53%;
    }

    .register-a {
        display: flex;
        align-items: center;
        justify-content: center;
        float: left;
        width: 180px;
        margin-top: -80px;
        margin-left: 9%;
        height: 50px;
        text-align: center;
        font-size: 17px;
        font-weight: normal;
        color: #fff;
        background-color: #c94141;
        border-color: transparent;
        cursor: pointer;
    }

</style>

<body>
    <h1 class="w3ls"> Signup</h1>
    <div class="content-w3ls">
        <div class="content-agile1">
            <h2 class="agileits1">Belgorod</h2>
            <p class="agileits2">No one can know what will happen in the future, the game can be reversed at any
                time. <br> That's why you should keep faith in the unlimited potential of the future and keep trying.
                <br>
                Explore
                for yourself to find true happiness in the future.
            </p>
        </div>
        <div class="content-agile2">
            <form action="{{ route('auth.register') }}" method="post">
                @csrf
                <div class="form-control w3layouts">
                    <input type="text" id="firstname" name="name" placeholder=" Name" title="Please enter your name"
                        class="@error('name') is-invalid @enderror">
                </div>
                @error('name')
                    <div style="margin-top: -10px; margin-bottom: 5px;">
                        <small style="margin-top:-5px;color:red">&emsp;* {{ $message }}</small>
                    </div>
                @enderror
                <div class="form-control w3layouts">
                    <input type="email" id="email" name="email" placeholder="mail@example.com"
                        class="@error('email') is-invalid @enderror" title="Please enter a valid email">
                </div>
                @error('email')
                    <div style="margin-top: -10px;margin-bottom: 5px;">
                        <small style="margin-top:-5px;color:red">&emsp;* {{ $message }}</small>
                    </div>
                @enderror
                <div class="form-control agileinfo">
                    <input type="password" class="lock" name="password" placeholder="Password" id="password1"
                        class="@error('password') is-invalid @enderror">
                </div>
                @error('password')
                    <div style="margin-top: -10px;margin-bottom: 5px;">
                        <small style="margin-top:-5px;color:red">&emsp;* {{ $message }}</small>
                    </div>
                @enderror
                <div class="form-control agileinfo">
                    <input type="password" class="lock" name="password_confirmation"
                        placeholder="Confirm Password" id="password2" required="">
                </div>
                <input type="submit" class="register" value="Register">
                <a class="register-a" href="{{ route('auth.login') }}">Cancel</a>
            </form>
        </div>
        <div class="clear"></div>
    </div>

</body>

</html>
