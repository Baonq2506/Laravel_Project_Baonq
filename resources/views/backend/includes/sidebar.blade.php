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
                            <li class="">
                                <a href="{{ route('backend.home') }}" aria-expanded="false">
                                    <span class="educate-icon educate-home icon-wrap"></span>
                                    <span class="mini-click-non">Dashboard</span>
                                </a>

                            </li>
                            <li>
                                <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span
                                        class="educate-icon educate-library icon-wrap"></span>&ensp;<span
                                        class="mini-click-non">Category</span></a>
                                <ul class="submenu-angle collapse" aria-expanded="false">
                                    <li><a title="All Library" href="{{ route('backend.category.index') }}"><span
                                                class="mini-sub-pro">All Categories</span></a></li>
                                    <li><a title="Add Library" href="{{ route('backend.category.create') }}"><span
                                                class="mini-sub-pro">Create Categories</span></a></li>
                                    <li><a title="Delete Library"
                                            href="{{ route('backend.category.softDelete') }}"><span
                                                class="mini-sub-pro">All Delete Categories</span></a></li>
                                </ul>
                            </li>

                            <li>
                                <a class="has-arrow" href="#" aria-expanded="false"><i
                                        class="fa fa-user-secret fa-lg" aria-hidden="true"></i>&ensp; <span
                                        class="mini-click-non">Personnel</span></a>
                                <ul class="submenu-angle collapse" aria-expanded="false">
                                    <li><a title="All Professors" href="{{ route('backend.personnel.index') }}"><span
                                                class="mini-sub-pro">All Personnel</span></a></li>
                                    <li><a title="Add Professor" href="{{ route('backend.personnel.create') }}"><span
                                                class="mini-sub-pro">Create Personnel</span></a></li>
                                    <li><a title="delete Professor"
                                            href="{{ route('backend.personnelSoftDelete') }}"><span
                                                class="mini-sub-pro">All Delete Personnel</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="all-students.html" aria-expanded="false"><i
                                        class="fa fa-user-o fa-lg" aria-hidden="true"></i>&ensp; <span
                                        class="mini-click-non">User</span></a>
                                <ul class="submenu-angle collapse" aria-expanded="false">
                                    <li><a title="All Students" href="{{ route('backend.user.index') }}"><span
                                                class="mini-sub-pro">All Users</span></a></li>
                                    <li><a title="Add Students" href="{{ route('backend.user.create') }}"><span
                                                class="mini-sub-pro">Create
                                                Users</span></a></li>
                                    <li><a title="Edit Students" href="{{ route('backend.user.softDelete') }}"><span
                                                class="mini-sub-pro">All Delete
                                                Users</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="all-courses.html" aria-expanded="false"><i
                                        class="fa fa-newspaper-o fa-lg" aria-hidden="true"></i>&ensp;<span
                                        class="mini-click-non">Post</span></a>
                                <ul class="submenu-angle collapse" aria-expanded="false">
                                    <li><a title="All Courses" href="{{ route('backend.post.index') }}"><span
                                                class="mini-sub-pro">All
                                                Posts</span></a></li>
                                    <li><a title="Add Courses" href="{{ route('backend.post.create') }}"><span
                                                class="mini-sub-pro">Create
                                                Posts</span></a></li>
                                    <li><a title="Courses Profile" href="course-info.html"><span
                                                class="mini-sub-pro">All Tags</span></a></li>
                                    <li><a title="Courses Profile" href="course-info.html"><span
                                                class="mini-sub-pro">Create Tags</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="all-courses.html" aria-expanded="false"><i
                                        class="fa fa-shopping-basket fa-lg" aria-hidden="true"></i>&ensp;<span
                                        class="mini-click-non">Product</span></a>
                                <ul class="submenu-angle collapse" aria-expanded="false">
                                    <li><a title="All Library" href="{{ route('backend.product.index') }}"><span
                                                class="mini-sub-pro">All Products</span></a></li>
                                    <li><a title="Add Library" href="{{ route('backend.product.create') }}"><span
                                                class="mini-sub-pro">Create Product</span></a></li>
                                    <li><a title="Edit Library" href="edit-library-assets.html"><span
                                                class="m    ini-sub-pro">Edit Product</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow" href="all-professors.html" aria-expanded="false"><i
                                        class="fa fa-rocket fa-lg" aria-hidden="true"></i>&ensp; <span
                                        class="mini-click-non">Roles</span></a>
                                <ul class="submenu-angle collapse" aria-expanded="false">
                                    <li><a title="All Professors" href="{{ route('backend.personnel.index') }}"><span
                                                class="mini-sub-pro">All Roles</span></a></li>
                                    <li><a title="Add Professor" href="{{ route('backend.personnel.create') }}"><span
                                                class="mini-sub-pro">Create Role</span></a></li>
                                    <li><a title=" Professor" href="edit-professor.html"><span
                                                class="mini-sub-pro">All Permissions</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a title="Landing Page" href="events.html" aria-expanded="false"><span
                                        class="educate-icon educate-event icon-wrap sub-icon-mg"
                                        aria-hidden="true"></span> &ensp;<span class="mini-click-non">Event</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </nav>
</div>
