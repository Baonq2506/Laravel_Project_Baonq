<!doctype html>
<html>

<head>
    <title>Sign up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />

    <link rel="stylesheet" href="https://use.fontawesome.com/ed8913978e.css">
    <!-- fonts -->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <!-- /fonts -->
    <!-- css -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/register.css') }}" rel='stylesheet' type='text/css' media="all" />
    <!-- /css -->
</head>
<style>
    body {
        background: url(/images/LOL/Header/shurima-ruins.jpg) no-repeat;
    }

    .content-w3ls .content-agile1 {
        background: url(/images/LOL/Header/pexels-photo-3222686.jpeg) no-repeat;
    }

</style>

<body>
    <h1 class="w3ls"> Signup</h1>
    <div class="content-w3ls">
        <div class="content-agile1">
            <h2 class="agileits1">World</h2>
            <p class="agileits2">No one can know what will happen in the future, the game can be reversed at any
                time. <br> That's why you should keep faith in the unlimited potential of the future and keep trying.
                <br>
                Explore
                for yourself to find true happiness in the future.
            </p>
        </div>
        <div class="content-agile2">
            <form action="#" method="post">
                <div class="form-control w3layouts">
                    <input type="text" id="firstname" name="firstname" placeholder="First Name"
                        title="Please enter your First Name" required="">
                </div>

                <div class="form-control w3layouts">
                    <input type="email" id="email" name="email" placeholder="mail@example.com"
                        title="Please enter a valid email" required="">
                </div>

                <div class="form-control agileinfo">
                    <input type="password" class="lock" name="password" placeholder="Password" id="password1"
                        required="">
                </div>

                <div class="form-control agileinfo">
                    <input type="password" class="lock" name="confirm-password" placeholder="Confirm Password"
                        id="password2" required="">
                </div>
                <input type="submit" class="register" value="Register">
            </form>

            <script type="text/javascript">
                window.onload = function() {
                    document.getElementById("password1").onchange = validatePassword;
                    document.getElementById("password2").onchange = validatePassword;
                }

                function validatePassword() {
                    var pass2 = document.getElementById("password2").value;
                    var pass1 = document.getElementById("password1").value;
                    if (pass1 != pass2)
                        document.getElementById("password2").setCustomValidity("Passwords Don't Match");
                    else
                        document.getElementById("password2").setCustomValidity('');

                }
            </script>
            <p class="wthree w3l">Fast Signup With Your Favourite Social Profile</p>
            <ul class="social-agileinfo wthree2">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>

</body>

</html>
