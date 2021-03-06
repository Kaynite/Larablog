<?php
    $pendingCommentsCount = DB::table('comments')
        ->where('approved', 0)
        ->count();
?>

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
                <li class="{{ Route::currentRouteNamed('adminPages', 'adminEditPage') ? 'active' : Null }}">
                    <a href="{{ route("adminPages") }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="feather icon-feather"></i>
                        </span>
                        <span class="pcoded-mtext">Pages</span>
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
                <li class="pcoded-hasmenu {{ Route::currentRouteNamed('adminComments', 'adminEditComent', 'adminCommentsPending', 'adminCommentsTrash') ? 'active pcoded-trigger' : Null }}">
                    <a href="javascript:void(0)" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="feather icon-message-square"></i></span>
                        <span class="pcoded-mtext">Comments</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ Route::currentRouteNamed('adminComments') ? 'active' : Null }}">
                            <a href="{{ route('adminComments') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Approved Comments</span>
                            </a>
                        </li>
                        <li class="{{ Route::currentRouteNamed('adminCommentsPending') ? 'active' : Null }}">
                            <a href="{{ route('adminCommentsPending') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Pending Comments</span>
                                <span class="pcoded-badge label label-info ">{{ $pendingCommentsCount }}</span>
                            </a>
                        </li>
                        <li class="{{ Route::currentRouteNamed('adminCommentsTrash') ? 'active' : Null }}">
                            <a href="{{ route('adminCommentsTrash') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Trash</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>