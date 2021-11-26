<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a data-toggle="tooltip" data-placement="top" title="Go Frontend"
                href="{{ route('frontend.home.index') }}" class="nav-link"><i class="fas fa-bold"></i></a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">


        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">{{ Auth::user()->unreadNotifications->count() }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">{{ Auth::user()->unreadNotifications->count() }}&ensp;New
                    Notifications</span>
                <div class="dropdown-divider"></div>

                @if (auth()->user()->CountNotificationsUser() > 0)
                    <a href="{{ route('backend.notification.index') }}" class="dropdown-item">
                        <i class="fas fa-user"></i> You have notification from Manager
                        <span
                            class="float-right text-muted text-sm">{{ auth()->user()->CountNotificationsUser() }}</span>
                    </a>
                @endif
                <div class="dropdown-divider"></div>
                @if (auth()->user()->CountNotificationsPost() > 0)
                    <a href="{{ route('backend.notification.index') }}" class="dropdown-item">
                        <i class="fas fa-newspaper"></i> You have posts need confirm
                        <span
                            class="float-right text-muted text-sm">{{ auth()->user()->CountNotificationsPost() }}</span>
                    </a>
                @endif

                <div class="dropdown-divider"></div>
                @if (auth()->user()->CountNotificationsProduct() > 0)
                    <a href="{{ route('backend.notification.index') }}" class="dropdown-item">
                        <i class="fas fa-cart-plus"></i> You have new Order (
                        {{ auth()->user()->CountNotificationsProduct() }})

                        {{-- <span
                            class="float-right text-muted text-sm">{{ now()->diffForHumans($notification->created_at) }}</span> --}}
                    </a>
                @endif
                <div class="dropdown-divider"></div>
                <a href="{{ route('backend.notification.index') }}" class="dropdown-item dropdown-footer">See All
                    Notifications</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('auth.logout.store') }}" role="button">
                <i class="fa fa-power-off" aria-hidden="true"></i>
            </a>

        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fa fa-cogs" aria-hidden="true"></i>
            </a>
        </li>
    </ul>
</nav>
