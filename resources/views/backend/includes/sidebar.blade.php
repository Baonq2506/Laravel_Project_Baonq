<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ Auth::user()->image_url_full }}" class="img-circle elevation-2 img-style" alt="User Image">
        </div>
        <div class="info" style="margin-top: -10px;">
            <a href="#" class="d-block">
                {{ Auth::user()->name }}
                <br>
                <span class="badge badge-primary"> {{ Auth::user()->roles[0]->name }}</span>
                <span>{!! Auth::user()->status_text !!}</span>
            </a>



        </div>
    </div>

    <!-- SidebarSearch Form -->
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar nav-flat flex-column" data-widget="treeview" role="menu"
            data-accordion="false">
            <!-- Home -->
            <li class="nav-header" style="font-weight:bold;color:rgb(22, 190, 241)">
                <h5>Home</h5>
            </li>
            <li class="nav-item  @if (request()->routeIs('backend.home'))
                menu-open @endif ">
                <a href="{{ route('backend.home') }}"
                    class="nav-link @if (request()->is('backend.home')) active
                        @endif">
                    <i style=" @if (request()->routeIs('backend.home')) color:red  @endif" class="fa fa-home" aria-hidden="true"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li style="font-weight:bold;color:rgb(22, 190, 241)" class="nav-header">
                <h5>
                    Product & Order</h5>
            </li>
            {{-- Product --}}
            <li class="nav-item @if (request()->routeIs('backend.product.*'))
                menu-open @endif ">
                <a href="#"
                    class="nav-link @if (request()->routeIs('backend.product.*'))
                active @endif ">
                    <i class="fab fa-product-hunt"></i>
                    <p>
                        Product
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('backend.product.create') }}" class="nav-link  @if (request()->routeIs('backend.product.create')) active @endif">
                            <i style=" @if (request()->routeIs('backend.product.create')) color:red  @endif" class="fa fa-plus" aria-hidden="true"></i>
                            <p>Create Product</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('backend.product.index') }}" class="nav-link  @if (request()->routeIs('backend.product.index')) active @endif">
                            <i style=" @if (request()->routeIs('backend.product.index')) color:red  @endif" class="fa fa-list" aria-hidden="true"></i>
                            <p>List Products</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('backend.product.order') }}" class="nav-link  @if (request()->routeIs('backend.product.order')) active @endif">
                            <i style=" @if (request()->routeIs('backend.product.order')) color:red  @endif" class="fa fa-list" aria-hidden="true"></i>
                            <p>List Orders</p>
                        </a>
                    </li>
                </ul>
            </li>
            {{-- Order --}}

            <li style="font-weight:bold;color:rgb(22, 190, 241)" class="nav-header">
                <h5>
                    Blog</h5>
            </li>
            {{-- Category --}}
            <li class="nav-item @if (request()->routeIs('backend.category.*'))
                menu-open @endif ">
                <a href="#"
                    class="nav-link @if (request()->routeIs('backend.category.*'))
                active @endif ">
                    <i class="fa fa-gavel" aria-hidden="true"></i>
                    <p>
                        Category
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('backend.category.create') }}" class="nav-link  @if (request()->routeIs('backend.category.create')) active @endif">
                            <i style=" @if (request()->routeIs('backend.category.create')) color:red  @endif" class="fa fa-plus" aria-hidden="true"></i>
                            <p>Create Category</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('backend.category.index') }}" class="nav-link  @if (request()->routeIs('backend.category.index')) active @endif">
                            <i style=" @if (request()->routeIs('backend.category.index')) color:red  @endif" class="fa fa-list" aria-hidden="true"></i>
                            <p>List Categories</p>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="{{ route('backend.category.softDelete') }}"
                            class="nav-link  @if (request()->routeIs('backend.category.softDelete')) active @endif">
                            <i class="fa fa-times-circle" aria-hidden="true"></i>
                            <p>Categories Delete</p>
                        </a>
                    </li> --}}
                </ul>
            </li>
            {{-- Post --}}
            <li class="nav-item @if (request()->routeIs('backend.post.*'))
                menu-open @endif ">
                <a href="#2" class="nav-link @if (request()->routeIs('backend.post.*'))
                active @endif">
                    <i class="fa fa-list-alt" aria-hidden="true"></i>
                    <p>
                        Post
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('backend.post.create') }}" class="nav-link @if (request()->routeIs('backend.post.create')) active @endif">
                            <i style=" @if (request()->routeIs('backend.post.create')) color:red  @endif" class="fa fa-plus-circle" aria-hidden="true"></i>
                            <p> &ensp;Create Post</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('backend.post.index') }}" class="nav-link  @if (request()->routeIs('backend.post.index')) active  @endif">
                            <i style=" @if (request()->routeIs('backend.post.index')) color:red  @endif" class="fa fa-th-list" aria-hidden="true"></i>
                            <p> &ensp;Post list</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('backend.post.historyDelete') }}"
                            class="nav-link  @if (request()->routeIs('backend.post.historyDelete')) active @endif">
                            <i style=" @if (request()->routeIs('backend.post.historyDelete')) color:red  @endif" class="fa fa-trash" aria-hidden="true"></i>
                            <p> &ensp;Delete History</p>
                        </a>
                    </li>
                </ul>
            </li>
            {{-- Tag --}}
            <li class="nav-item @if (request()->routeIs('backend.tag.*'))
                menu-open @endif ">
                <a href="#2" class="nav-link @if (request()->routeIs('backend.tag.*'))
                active @endif">
                    <i class="fa fa-tags" aria-hidden="true"></i>
                    <p>
                        Tag
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('backend.tag.index') }}" class="nav-link  @if (request()->routeIs('backend.tag.index')) active @endif">
                            <i style=" @if (request()->routeIs('backend.tag.index')) color:red  @endif" class="fa fa-th-list" aria-hidden="true"></i>
                            <p>&ensp;Tag list</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('backend.tag.create') }}" class="nav-link  @if (request()->routeIs('backend.tag.create')) active @endif">
                            <i style=" @if (request()->routeIs('backend.tag.create')) color:red  @endif" class="fa fa-plus-circle" aria-hidden="true"></i>
                            <p>&ensp;Create Tag</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li style="font-weight:bold;color:rgb(22, 190, 241)" class="nav-header">
                <h5>Employee & Users</h5>
            </li>
            {{-- User --}}
            <li class="nav-item @if (request()->routeIs('backend.user.*'))
                menu-open @endif ">
                <a href="#" class="nav-link @if (request()->routeIs('backend.user.*'))
                active @endif ">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <p>
                        Users
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('backend.user.create') }}" class="nav-link  @if (request()->routeIs('backend.user.create')) active @endif">
                            <i style=" @if (request()->routeIs('backend.user.create')) color:red  @endif" class="fa fa-user-plus" aria-hidden="true"></i>
                            <p>Create User</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('backend.user.index') }}" class="nav-link  @if (request()->routeIs('backend.user.index')) active @endif">
                            <i style=" @if (request()->routeIs('backend.user.index')) color:red  @endif" class="fa fa-th-list" aria-hidden="true"></i>
                            <p>List users</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('backend.user.softDelete') }}" class="nav-link  @if (request()->routeIs('backend.user.softDelete')) active @endif">
                            <i style=" @if (request()->routeIs('backend.user.softDelete')) color:red  @endif" class="fa fa-user-times" aria-hidden="true"></i>
                            <p>List History Users</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('backend.user.indexBan') }}" class="nav-link  @if (request()->routeIs('backend.user.indexBan')) active @endif">
                            <i style=" @if (request()->routeIs('backend.user.indexBan')) color:red  @endif" class="fa fa-user-times" aria-hidden="true"></i>
                            <p>List Users Ban</p>
                        </a>
                    </li>
                </ul>
            </li>
            {{-- Employee --}}
            <li class="nav-item @if (request()->routeIs('backend.personnel.*'))
                menu-open @endif ">
                <a href="#"
                    class="nav-link @if (request()->routeIs('backend.personnel.*'))
                    active @endif ">
                    <i class="fa fa-user-secret" aria-hidden="true"></i>
                    <p>
                        Employee
                        <i class="fas fa-angle-left right"></i>

                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('backend.personnel.create') }}"
                            class="nav-link  @if (request()->routeIs('backend.personnel.create')) active @endif">
                            <i style=" @if (request()->routeIs('backend.personnel.create')) color:red  @endif" class="fa fa-user-plus" aria-hidden="true"></i>
                            <p>Create Employee</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('backend.personnel.index') }}" class="nav-link  @if (request()->routeIs('backend.personnel.index')) active @endif">
                            <i style=" @if (request()->routeIs('backend.personnel.index')) color:red  @endif" class="fa fa-th-list" aria-hidden="true"></i>
                            <p>List Employee</p>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="{{ route('backend.personnel.perSoftDelete') }}"
                            class="nav-link  @if (request()->routeIs('backend.personnel.perSoftDelete')) active @endif">
                            <i style=" @if (request()->routeIs('backend.personnel.perSoftDelete')) color:red  @endif" class="fa fa-user-times" aria-hidden="true"></i>
                            <p>List Die Employee</p>
                        </a>
                    </li> --}}

                </ul>
            </li>
            <li style="font-weight:bold;color:rgb(22, 190, 241)" class="nav-header">
                <h5>Decentralization</h5>
            </li>
            {{-- Role --}}
            <li class="nav-item @if (request()->routeIs('backend.role.*'))
                menu-open @endif ">
                <a href="#" class="nav-link @if (request()->routeIs('backend.role.*'))
                active @endif ">
                    <i class="fa fa-balance-scale" aria-hidden="true"></i>
                    <p>
                        Role & Permission
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('backend.role.create') }}" class="nav-link  @if (request()->routeIs('backend.role.create')) active @endif">
                            <i style=" @if (request()->routeIs('backend.role.create')) color:red  @endif" class="fa fa-plus" aria-hidden="true"></i>
                            <p>Create Role</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('backend.role.index') }}" class="nav-link  @if (request()->routeIs('backend.role.index')) active @endif">
                            <i style=" @if (request()->routeIs('backend.role.index')) color:red  @endif" class="fa fa-list" aria-hidden="true"></i>
                            <p>List role</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('backend.role.rolePer') }}" class="nav-link  @if (request()->routeIs('backend.role.rolePer')) active @endif">
                            <i style=" @if (request()->routeIs('backend.role.rolePer')) color:red  @endif" class="fa fa-list-alt" aria-hidden="true"></i>
                            <p>List Decentralization</p>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="" class="nav-link  @if (request()->routeIs('backend.role.indexPermissions')) active @endif">
                            <i style=" @if (request()->routeIs('backend.role.indexPermissions')) color:red  @endif" class="fa fa-th-list" aria-hidden="true"></i>
                            <p>List Permissions</p>
                        </a>
                    </li> --}}
                    {{-- <li class="nav-item">
                        <a href="" class="nav-link  @if (request()->routeIs('backend.permission.userPermissions')) active @endif">
                            <i style=" @if (request()->routeIs('backend.permission.userPermissions')) color:red  @endif" class="fa fa-address-book" aria-hidden="true"></i>
                            <p>List Employee Rights</p>
                        </a>
                    </li> --}}
                </ul>
            </li>

            <li style="font-weight:bold;color:rgb(22, 190, 241)" class="nav-header">
                <h5>Notification & Log</h5>
            </li>
            {{-- Notification --}}
            <li class="nav-item @if (request()->routeIs('backend.notification.*'))
                menu-open @endif ">
                <a href="#"
                    class="nav-link @if (request()->routeIs('backend.notification.*'))
                active @endif ">
                    <i class="fas fa-bell"></i>
                    <p>
                        Notification
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('backend.notification.create') }}"
                            class="nav-link  @if (request()->routeIs('backend.notification.create')) active @endif">
                            <i style=" @if (request()->routeIs('backend.notification.create')) color:red  @endif" class="fa fa-plus" aria-hidden="true"></i>
                            <p>Create Notification</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('backend.notification.index') }}"
                            class="nav-link  @if (request()->routeIs('backend.notification.index')) active @endif">
                            <i style=" @if (request()->routeIs('backend.notification.index')) color:red  @endif" class="fa fa-list" aria-hidden="true"></i>
                            <p>List Notifications</p>
                        </a>
                    </li>
                </ul>
            </li>
            {{-- Logs --}}
            <li class="nav-item @if (request()->routeIs('backend.viewLog.Log'))
                menu-open @endif ">
                <a href="#"
                    class="nav-link @if (request()->routeIs('backend.viewLog.Log'))
                active @endif ">
                    <i class="fas fa-bug"></i>
                    <p>
                        Log
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('backend.viewLog.Log') }}" class="nav-link  @if (request()->routeIs('backend.viewLog.Log')) active @endif">
                            <i style=" @if (request()->routeIs('backend.viewLog.Log')) color:red  @endif" class="fa fa-list" aria-hidden="true"></i>
                            <p>List Logs</p>
                        </a>
                    </li>

                </ul>
            </li>
        </ul>
        <hr>
    </nav>
    <!-- /.sidebar-menu -->
</div>
