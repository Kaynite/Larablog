<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <div class="pcoded-navigation-label">Blog</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="">
                    <a href="{{ route("home") }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-eye"></i>
                        </span>
                        <span class="pcoded-mtext">View Blog</span>
                    </a>
                </li>
            </ul>
            
            <div class="pcoded-navigation-label">Admin Panel</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="{{ Route::currentRouteNamed('adminPosts', 'adminEditPost') ? 'active' : Null }}">
                    <a href="{{ route("adminPosts") }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-file-text"></i>
                        </span>
                        <span class="pcoded-mtext">Posts</span>
                    </a>
                </li>
                <li class="{{ Route::currentRouteNamed('adminCategories', 'adminEditCategory') ? 'active' : Null }}">
                    <a href="{{ route("adminCategories") }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-folder"></i>
                        </span>
                        <span class="pcoded-mtext">Categories</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route("adminComments") }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-message-square"></i>
                        </span>
                        <span class="pcoded-mtext">Comments</span>
                    </a>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="index.html" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Default</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="dashboard-crm.html" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">CRM</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="dashboard-analytics.html" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Analytics</span>
                                <span class="pcoded-badge label label-info ">NEW</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                        <span class="pcoded-mtext">Page layouts</span>
                        <span class="pcoded-badge label label-warning">NEW</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class=" pcoded-hasmenu">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Vertical</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class="">
                                    <a href="menu-static.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Static Layout</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="menu-header-fixed.html"
                                        class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Header Fixed</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="menu-compact.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Compact</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="menu-sidebar.html" class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Sidebar Fixed</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" pcoded-hasmenu">
                            <a href="javascript:void(0)" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Horizontal</span>
                            </a>
                            <ul class="pcoded-submenu">
                                <li class="">
                                    <a href="menu-horizontal-static.html" target="_blank"
                                        class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Static Layout</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="menu-horizontal-fixed.html" target="_blank"
                                        class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Fixed layout</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="menu-horizontal-icon.html" target="_blank"
                                        class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Static With Icon</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="menu-horizontal-icon-fixed.html" target="_blank"
                                        class="waves-effect waves-dark">
                                        <span class="pcoded-mtext">Fixed With Icon</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="menu-bottom.html" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Bottom Menu</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="navbar-light.html" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-menu"></i>
                        </span>
                        <span class="pcoded-mtext">Navigation</span>
                    </a>
                </li>
                <li class="pcoded-hasmenu">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-layers"></i>
                        </span>
                        <span class="pcoded-mtext">Widget</span>
                        <span class="pcoded-badge label label-danger">100+</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="">
                            <a href="widget-statistic.html" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Statistic</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="widget-data.html" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Data</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="widget-chart.html" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Chart Widget</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>