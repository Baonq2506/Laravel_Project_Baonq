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
                <li class="dropdown"><a href="{{ route('frontend.home') }}">Home</a>
                </li>
                <li class="dropdown"><a href="{{ route('frontend.header.index') }}">Header</a>
                </li>
                <li class="dropdown"><a href="{{ route('frontend.shop.index') }}">Shop</a>
                </li>
                <li class="dropdown"><a href="{{ route('frontend.blog.index') }}">Blog</a>
                </li>
                <li class="dropdown"><a href="{{ route('frontend.about.index') }}">About</a>
                </li>
                <li class="dropdown"><a href="{{ route('frontend.about.contact') }}">Contact</a>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                @if (Auth::check())
                    <li class="dropdown" style="width: 120px;">
                        <a href="" data-toggle="tooltip" data-placement="bottom" title="{{ auth()->user()->name }}">
                            <p style="
                        white-space: nowrap;
                        overflow: hidden;
                        text-overflow: ellipsis;
                        "> <span class="icon-profile-male"></span> &ensp; {{ auth()->user()->name }}
                            </p>
                        </a>
                    </li>
                    <li><a> | </a></li>
                    <li class="dropdown"><a href="{{ route('auth.logout.store') }}">Logout</a></li>
                @else
                    <li class="dropdown"><a href="{{ route('auth.register') }}">Register</a></li>
                    <li><a> | </a></li>
                    <li class="dropdown"><a href="{{ route('auth.login') }}">Login</a></li>
                @endif
            </ul>
        </div>

    </div>
</nav>
