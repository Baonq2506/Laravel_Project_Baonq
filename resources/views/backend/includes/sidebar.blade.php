<div class="left-sidebar-pro">
    <nav id="sidebar">
        <div class="sidebar-header">
            <a href="index.html"><img width="60px" class="main-logo" src="/images/logo.ico" alt=""></a>
            <strong><a href="index.html"><img style="margin-top: -20px" src="/images/logo.ico" alt=""></a></strong>
        </div>
        <br>
        <div class="left-custom-menu-adp-wrap  mCustomScrollbar _mCS_1 mCS-autoHide"
            style="position: relative; overflow: visible;">
            <div id="mCSB_1" class="mCustomScrollBox mCS-light-1 mCSB_vertical mCSB_outside" style="max-height: none;"
                tabindex="0">
                <div id="mCSB_1_container" class="mCSB_container" style="position: relative; top: 0px; left: 0px;"
                    dir="ltr">
                    <nav class="sidebar-nav left-sidebar-menu-pro">
                        <ul class="metismenu" id="menu1">
                            {{-- Dashboard --}}
                            <li class="">
                                <a href="{{ route('backend.home') }}" aria-expanded="false">
                                    <i
                                        class="fa fa-home fa-lg @if (request()->routeIs('backend.home'))
                                        active-icon @endif"></i>
                                    <span
                                        class="mini-click-non @if (request()->routeIs('backend.home'))
                                        active @endif">
                                        &ensp;Dashboard</span>
                                </a>

                            </li>
                            {{-- Category --}}
                            <li>
                                <a class="has-arrow" href="all-courses.html" aria-expanded="false"><i
                                        class="fa fa-list-alt fa-lg  @if (request()->routeIs('backend.category.*'))
                                    active-icon @endif"
                                        aria-hidden="true"></i>&ensp;<span
                                        class="mini-click-non @if (request()->routeIs('backend.category.*')) active @endif ">Category</span></a>

                                <ul class="submenu-angle collapse @if (request()->routeIs('backend.category.*'))
                                    show @endif"
                                    aria-expanded="false">
                                    <li><a title="All Library" href="{{ route('backend.category.index') }}"><span
                                                class="mini-sub-pro @if (request()->routeIs('backend.category.index')) active @endif">All Categories</span></a>
                                    </li>
                                    <li><a title="Add Library" href="{{ route('backend.category.create') }}"><span
                                                class="mini-sub-pro  @if (request()->routeIs('backend.category.create')) active @endif">Create
                                                Categories</span></a></li>

                                </ul>
                            </li>
                            {{-- Personnel --}}
                            <li>
                                <a class="has-arrow" href="#" aria-expanded="false"><i
                                        class="fa fa-user-secret fa-lg  @if (request()->routeIs('backend.personnel.*'))
                                        active-icon @endif"
                                        aria-hidden="true"></i>&ensp; <span
                                        class="mini-click-non @if (request()->routeIs('backend.personnel.*'))
                                            active @endif">Personnel</span></a>
                                <ul class="submenu-angle collapse  @if (request()->routeIs('backend.personnel.*'))
                                    show @endif"
                                    aria-expanded="false">
                                    <li><a title="All Professors" href="{{ route('backend.personnel.index') }}"><span
                                                class="mini-sub-pro  @if (request()->routeIs('backend.personnel.index')) active @endif">All Personnel</span></a>
                                    </li>
                                    <li><a title="Add Professor" href="{{ route('backend.personnel.create') }}"><span
                                                class="mini-sub-pro @if (request()->routeIs('backend.personnel.create')) active @endif">Create
                                                Personnel</span></a></li>

                                </ul>
                            </li>
                            {{-- User --}}
                            <li>
                                <a class="has-arrow" href="all-students.html" aria-expanded="false"><i
                                        class="fa fa-user-o fa-lg @if (request()->routeIs('backend.user.*'))
                                        active-icon @endif"
                                        aria-hidden="true"></i>&ensp; <span
                                        class="mini-click-non @if (request()->routeIs('backend.user.*'))
                                        active @endif">User</span></a>
                                <ul class="submenu-angle collapse @if (request()->routeIs('backend.user.*'))
                                    show @endif"
                                    aria-expanded="false">
                                    <li><a title="All Students" href="{{ route('backend.user.index') }}"><span
                                                class="mini-sub-pro @if (request()->routeIs('backend.user.index'))
                                                active @endif">All
                                                Users</span></a></li>
                                    <li><a title="Add Students" href="{{ route('backend.user.create') }}"><span
                                                class="mini-sub-pro @if (request()->routeIs('backend.user.create'))
                                                active @endif">Create
                                                Users</span></a></li>
                                    <li><a title="Edit Students" href="{{ route('backend.user.softDelete') }}"><span
                                                class="mini-sub-pro @if (request()->routeIs('backend.user.softDelete'))
                                                active @endif">All
                                                Delete
                                                Users</span></a></li>
                                </ul>
                            </li>
                            {{-- Post-Tag --}}
                            <li>
                                <a class="has-arrow" href="all-courses.html" aria-expanded="false"><i
                                        class="fa fa-newspaper-o fa-lg @if (request()->routeIs('backend.post.*') || request()->routeIs('backend.tag.*'))
                                        active-icon @endif"
                                        aria-hidden="true"></i>&ensp;<span
                                        class="mini-click-non @if (request()->routeIs('backend.post.*') || request()->routeIs('backend.tag.*'))
                                        active @endif">Post</span></a>
                                <ul class="submenu-angle collapse @if (request()->routeIs('backend.post.*') || request()->routeIs('backend.tag.*'))
                                   show @endif"
                                    aria-expanded="false">
                                    <li><a title="All Courses" href="{{ route('backend.post.index') }}"><span
                                                class="mini-sub-pro @if (request()->routeIs('backend.post.index'))
                                                active @endif">All
                                                Posts</span></a></li>
                                    <li><a title="Add Courses" href="{{ route('backend.post.create') }}"><span
                                                class="mini-sub-pro @if (request()->routeIs('backend.post.create'))
                                                active @endif">Create
                                                Posts</span></a></li>
                                    <li><a title="Courses Profile" href="{{ route('backend.tag.index') }}"><span
                                                class="mini-sub-pro @if (request()->routeIs('backend.tag.index'))
                                                active @endif">All
                                                Tags</span></a></li>
                                    <li><a title="Courses Profile" href="{{ route('backend.tag.create') }}"><span
                                                class="mini-sub-pro @if (request()->routeIs('backend.tag.create'))
                                                active @endif">Create
                                                Tags</span></a></li>
                                </ul>
                            </li>
                            {{-- Product --}}
                            <li>
                                <a class="has-arrow" href="all-courses.html" aria-expanded="false"><i
                                        class="fa fa-shopping-basket fa-lg @if (request()->routeIs('backend.product.*'))
                                        active-icon @endif"
                                        aria-hidden="true"></i>&ensp;<span
                                        class="mini-click-non @if (request()->routeIs('backend.product.*'))
                                        active @endif">Product</span></a>
                                <ul class="submenu-angle collapse @if (request()->routeIs('backend.product.*'))
                                    show @endif"
                                    aria-expanded="false">
                                    <li><a title="All Library" href="{{ route('backend.product.index') }}"><span
                                                class="mini-sub-pro @if (request()->routeIs('backend.product.index'))
                                                active @endif">All
                                                Products</span></a></li>
                                    <li><a title="Add Library" href="{{ route('backend.product.create') }}"><span
                                                class="mini-sub-pro @if (request()->routeIs('backend.product.create'))
                                                active @endif">Create
                                                Product</span></a></li>
                                </ul>
                            </li>
                            {{-- Roles --}}
                            <li>
                                <a class="has-arrow" href="all-professors.html" aria-expanded="false"><i
                                        class="fa fa-rocket fa-lg @if (request()->routeIs('backend.role.*'))
                                        active-icon @endif"
                                        aria-hidden="true"></i>&ensp; <span
                                        class="mini-click-non @if (request()->routeIs('backend.role.*'))
                                        active @endif">Roles</span></a>
                                <ul class="submenu-angle collapse @if (request()->routeIs('backend.role.*'))
                                    show @endif"
                                    aria-expanded="false">
                                    <li><a title="All Professors" href="{{ route('backend.role.index') }}"><span
                                                class="mini-sub-pro @if (request()->routeIs('backend.role.index'))
                                                active @endif">All
                                                Roles</span></a></li>
                                    <li><a title="Add Professor" href="{{ route('backend.role.create') }}"><span
                                                class="mini-sub-pro @if (request()->routeIs('backend.role.create'))
                                                active @endif">Create
                                                Role</span></a></li>
                                    <li><a title=" Professor"
                                            href="{{ route('backend.role.indexPermissions') }}"><span
                                                class="mini-sub-pro @if (request()->routeIs('backend.role.indexPermissions'))
                                                active @endif">All
                                                Permissions</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </nav>
</div>
