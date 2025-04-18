<div class="page-wrapper chiller-theme toggled">
    {{-- <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
        <i class="fas fa-bars"></i>
    </a> --}}
    <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
            <div class="sidebar-brand text-center">
                <a href="#">Reyjaguines</a>
                {{-- <div id="close-sidebar">
                    <i class="fbi bi-text-indent-right"></i>
                </div> --}}
            </div>
            <div class="sidebar-header">
                <div class="user-pic">
                    <img src="http://localhost:8000/images/profile-img.jpg" alt="Profile" class="rounded-circle"
                        style="width: 40px; height: 40px;">
                    {{-- <img class="img-responsive img-rounded" src="" alt="User picture"> --}}
                </div>
                <div class="user-info">
                    <span class="user-name">Rey
                        <strong>Jag</strong>
                    </span>
                    <span class="user-role">Administrator</span>
                    <span class="user-status">
                        <i class="fa fa-circle"></i>
                        <span>Online</span>
                    </span>
                </div>
            </div>
            <!-- sidebar-header  -->
            <div class="sidebar-menu">
                <ul>
                    <li class="header-menu">
                        <span>General</span>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fa fa-tachometer-alt"></i>
                            <span>Dashboard</span>
                            <span class="badge badge-pill badge-warning">New</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="{{ route('assignRole') }}">Assign Role
                                        <span class="badge badge-pill badge-success">Pro</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('profile') }}">Profile 2</a>
                                </li>
                                <li>
                                    <a href="{{ route('doc3') }}">document 3</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    {{-- <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                            <span>E-commerce</span>
                            <span class="badge badge-pill badge-danger">3</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="#">Products

                                    </a>
                                </li>
                                <li>
                                    <a href="#">Orders</a>
                                </li>
                                <li>
                                    <a href="#">Credit cart</a>
                                </li>
                            </ul>
                        </div>
                    </li> --}}
                    <li class="sidebar-dropdown">
                        <a href="{{ route('post.index') }}">
                            <i class="fa-brands fa-blogger"></i>
                            <span>My Blog</span>

                        </a>

                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="far fa-gem"></i>
                            <span>Components</span>
                            <span class="badge badge-pill badge-warning text-success">rey</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="#">General</a>
                                </li>
                                <li>
                                    <a href="#">Panels</a>
                                </li>
                                <li>
                                    <a href="#">Tables</a>
                                </li>
                                <li>
                                    <a href="#">Icons</a>
                                </li>
                                <li>
                                    <a href="#">Forms</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fa fa-chart-line"></i>
                            <span>Charts</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="#">Pie chart</a>
                                </li>
                                <li>
                                    <a href="#">Line chart</a>
                                </li>
                                <li>
                                    <a href="#">Bar chart</a>
                                </li>
                                <li>
                                    <a href="#">Histogram</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="sidebar-dropdown">
                        <a href="#">
                            <i class="fa fa-globe"></i>
                            <span>Maps</span>
                        </a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li>
                                    <a href="#">Google maps</a>
                                </li>
                                <li>
                                    <a href="#">Open street map</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="header-menu">
                        <span>Extra</span>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-book"></i>
                            <span>Documentation</span>
                            <span class="badge badge-pill badge-primary">Beta</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-calendar"></i>
                            <span>Calendar</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-folder"></i>
                            <span>Examples</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- sidebar-menu  -->
        </div>
        <!-- sidebar-content  -->
        <div class="sidebar-footer">
            <a href="#">
                <i class="fa fa-bell"></i>
                <span class="badge badge-pill badge-warning notification">3</span>
            </a>
            <a href="#">
                <i class="fa fa-envelope"></i>
                <span class="badge badge-pill badge-success notification">7</span>
            </a>
            <a href="#">
                <i class="fa fa-cog"></i>
                <span class="badge-sonar"></span>
            </a>
            <a href="#">
                <i class="fa fa-power-off"></i>
            </a>
        </div>
    </nav>
    <!-- sidebar-wrapper  -->
    <main class="page-content">
        <div class="container-fluid">
            <h2>Pro Sidebar with Bootstrap 5</h2>
            <hr>
            <div class="row">
                <div class="form-group col-md-12">
                    <p>This is a responsive sidebar template with dropdown menu based on bootstrap 5 framework.</p>
                    <p> You can find the complete code on <a href="https://github.com/azouaoui-med/pro-sidebar-template"
                            target="_blank">
                            Github</a>, it contains more themes and background image option</p>
                </div>
            </div>
        </div>
</div>

</main>
<!-- page-content" -->
</div>
<!-- page-wrapper -->
