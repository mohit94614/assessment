<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{URL::asset('images/img.jpg')}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('index')}}">Dashboard</a></li>
                            <li><a href="{{ route('index1')}}">Dashboard2</a></li>
                            <li><a href="{{ route('index2') }}">Dashboard3</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a> <ul class="nav child_menu">
                            <li><a href="{{ route('form') }}">General Form</a></li>
                            <li><a href="{{ route('form-advanced')}}">Advanced Components</a></li>
                            <li><a href="{{ route('form-validation') }}">Form Validation</a></li>
                            <li><a href="{{ route('form-wizards') }}">Form Wizard</a></li>
                            <li><a href="{{ route('form-upload') }}">Form Upload</a></li>
                            <li><a href="{{ route('form-buttons') }}">Form Buttons</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('general') }}">General Elements</a></li>
                            <li><a href="{{ route('media') }}">Media Gallery</a></li>
                            <li><a href="{{ route('typography') }}">Typography</a></li>
                            <li><a href="{{ route('icons') }}">Icons</a></li>
                            <li><a href="{{ route('glyphicons') }}">Glyphicons</a></li>
                            <li><a href="{{ route('widgets') }}">Widgets</a></li>
                            <li><a href="{{ route('invoice') }}">Invoice</a></li>
                            <li><a href="{{ route('inbox') }}">Inbox</a></li>
                            <li><a href="{{ route('calendar') }}">Calendar</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('table') }}">Tables</a></li>
                            <li><a href="{{ route('table-dynamic') }}">Table Dynamic</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                        <<ul class="nav child_menu">
                            <li><a href="{{ route('chartjs') }}">Chart JS</a></li>
                            <li><a href="{{ route('chartjs') }}">Chart JS2</a></li>
                            <li><a href="{{ route('morisjs') }}">Moris JS</a></li>
                            <li><a href="{{ route('echart') }}">ECharts</a></li>
                            <li><a href="{{ route('otherchart') }}">Other Charts</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('fixedsidebar') }}">Fixed Sidebar</a></li>
                            <li><a href="{{ route('fixedfooter') }}">Fixed Footer</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('ecommerce') }}">E-commerce</a></li>
                            <li><a href="{{ route('project') }}">Projects</a></li>
                            <li><a href="{{ route('projectdetails') }}">Project Detail</a></li>
                            <li><a href="{{ route('contacts') }}">Contacts</a></li>
                            <li><a href="{{ route('profile') }}">Profile</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{ route('page403') }}">403 Error</a></li>
                            <li><a href="{{ route('page404') }}">404 Error</a></li>
                            <li><a href="{{ route('page500') }}">500 Error</a></li>
                            <li><a href="{{ route('plain') }}">Plain Page</a></li>
                            <li><a href="{{ route('home') }}">Login Page</a></li>
                            <li><a href="{{ route('pricing') }}">Pricing Tables</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="#level1_1">Level One</a>
                            <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li class="sub_menu"><a href="{{ route('level') }}">Level Two</a>
                                    </li>
                                    <li><a href="#level2_1">Level Two</a>
                                    </li>
                                    <li><a href="#level2_2">Level Two</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="#level1_2">Level One</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
