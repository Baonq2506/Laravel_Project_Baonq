<div class="page-loader">
    <div class="loader">Loading...</div>
</div>
<nav class="navbar navbar-custom navbar-fixed-top navbar-dark" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a style="margin-top:-9px" class="navbar-brand" href="#">
                <p><img src="/images/lg1.png" width="98px" alt=""></p>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a href="{{ route('home') }}">Home</a>
                </li>
                <li class="dropdown"><a href="{{ route('frontend.header.index') }}">Header</a>
                <li class="dropdown"><a href="{{ route('frontend.blog.index') }}">Blog</a>
                </li>
                </li>
                <li class="dropdown"><a href="{{ route('frontend.shop.index') }}">Shop</a>
                </li>
                <li class="dropdown"><a href="{{ route('frontend.about.index') }}">About</a>
                </li>
                <li class="dropdown"><a href="{{ route('frontend.portfolio.index') }}">Portfolio</a>
                </li>
                <li class="dropdown"><a href="{{ route('frontend.about.contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
