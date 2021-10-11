<!--
    JavaScripts
    =============================================
    -->
<script src="/frontend/assets/lib/jquery/dist/jquery.js"></script>
<script src="/frontend/assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/frontend/assets/lib/wow/dist/wow.js"></script>
<script src="/frontend/assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
<script src="/frontend/assets/lib/isotope/dist/isotope.pkgd.js"></script>
<script src="/frontend/assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
<script src="/frontend/assets/lib/flexslider/jquery.flexslider.js"></script>
<script src="/frontend/assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="/frontend/assets/lib/smoothscroll.js"></script>
<script src="/frontend/assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
<script src="/frontend/assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
<script src="/frontend/assets/js/plugins.js"></script>
<script src="/frontend/assets/js/main.js"></script>

<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId: '{your-app-id}',
            cookie: true,
            xfbml: true,
            version: '{api-version}'
        });

        FB.AppEvents.logPageView();

    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));


    {
        status: 'connected',
        authResponse: {
            accessToken: '...',
            expiresIn: '...',
            signedRequest: '...',
            userID: '...'
        }
    }
</script>
