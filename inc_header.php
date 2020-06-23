<!-- START OF PAGE HEADER -->
<header class="header  bg-dark fixed-top">    
    <nav  id="top-navbar" class="navbar navbar-dark">
        <div class="menu-trigger">
            <div class="bars"></div>
            <div class="bars"></div>
            <div class="bars"></div>
        </div>
        <div class="navbar-left">
            <div class="logo">
                <a class="navbar-brand" href="index.php"><span>NS </span>Admin</a>  
            </div>

        </div>
        <div class="navbar-right">
            <ul class="top-right-menu">
                <li>
                    <div class="main-search">
                        <div class="input-group">
                            <span class="input-group-append search-btn">
                                <i class="ion ion-search"></i>
                            </span>
                            <input class="form-control search-input" placeholder="Enter Keyword" type="text">
                            <span class="input-group-prepend search-close">
                                <i class="ion ion-close"></i>
                            </span>
                        </div>
                    </div>                    
                </li> 
                <li class="dropdown notification">
                    <a href="javascript:;" class="dropdown-toggle" id="notification-link"   data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-bell-o"></i>
                        <span class="badge badge-primary">5</span>
                    </a>
                    <ul class="dropdown-wrapper dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <li>
                            <h6>Notifications</h6>
                            <label class="label bg-danger">New</label>
                        </li>
                        <li>
                            <div class="media">
                                <img class="rounded-circle" src="public/images/profile.jpg" alt="profile">
                                <div class="media-body">
                                    <h5 class="notification-user">Lory Doe</h5>
                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                    <span class="notification-time">30 minutes ago</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <img class="rounded-circle" src="public/images/profile.jpg" alt="profile">
                                <div class="media-body">
                                    <h5 class="notification-user">Joseph William</h5>
                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                    <span class="notification-time">30 minutes ago</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <img class="rounded-circle" src="public/images/profile.jpg" alt="profile">
                                <div class="media-body">
                                    <h5 class="notification-user">Sara Soudein</h5>
                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                    <span class="notification-time">30 minutes ago</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="fullscreen-btn"><i class="fa fa-expand"></i></a>
                </li>
                <li class="dropdown profile-wrapper">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                        <img src="public/images/profile.jpg" class="rounded-circle" alt="User-Profile-Image">
                        <span>Lory Doe</span><i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-wrapper" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <li><i class="fa fa-gear"></i>Settings</li>
                        <li><i class="fa fa-envelope"></i>My Message</li>
                        <li><i class="fa fa-user"></i>Profile</li>
                        <li><i class="fa fa-sign-out"></i>Sign Out</li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

<!-- END OF PAGE HEADER -->

<!-- START OF MAIN PAGE WRAPPER -->
<main>
    <aside class="sidebar bg-dark has-custom-scrollbar">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu" role="tab" aria-selected="true"><i class="fa fa-bars"></i></a></li>
            <li class="nav-item"><a class="nav-link"  data-toggle="tab" href="#comments" role="tab" aria-selected="false"><i class="fa fa-comments"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#charts" role="tab" aria-selected="false"><i class="fa fa-area-chart"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#calender" role="tab" aria-selected="false"><i class="fa fa-calendar"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#notification" role="tab" aria-selected="false"><i class="fa fa-bell-o"></i></a></li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="menu" role="tabpanel">
                <div class="profile-content">
                    <a href="javascript:;"><img src="public/images/profile.jpg" class="rounded-circle" alt="profile"></a>
                    <h5>Lory Doe</h5>
                </div>
                <div class="menu-heading">
                    <h3>Menu</h3>
                </div>
                <ul class="nav sidebar-nav">
                    <li><a href="index.php" class="active"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="fa fa-toggle-off"></i>UI Elements<i class="fa fa-angle-down"></i></a>
                        <ul class="nav">
                            <li><a href="button.php"><i class="fa fa-circle-o"></i>Button</a></li>
                            <li><a href="dropdown.php"><i class="fa fa-arrows-v"></i>Dropdown</a></li>
                            <li><a href="other-element.php"><i class="fa fa-flag-o"></i>Other Elements</a></li>
                            <li><a href="breadcriumbs-and-pagination.php"><i class="fa fa-exchange"></i>Breadcrumbs & Pagination</a></li>
                            <li><a href="progressbar.php"><i class="fa fa-angle-double-right"></i>Progressbars</a></li>
                            <li><a href="alerts.php"><i class="fa fa-warning"></i> Alerts</a></li>
                            <li><a href="modal.php"><i class="fa fa-square-o"></i>Modal</a></li>
                            <li><a href="collapse.php"><i class="fa fa-align-justify"></i>Collapse</a></li>                            
                        </ul>
                    </li>
                    <li><a href="panel.php"><i class="fa fa-bookmark-o"></i>Panel</a></li>
                    <li><a href="table.php"><i class="fa fa-table"></i>Table</a></li>
                    <li><a href="grid.php"><i class="fa fa-th-large"></i>Grid</a></li>                    
                    <li><a href="form.php"><i class="fa fa-file-text-o"></i>Forms</a></li>                  
                    <li><a href="login.php"><i class="fa fa-sign-in"></i>Log In</a></li>
                    <li><a href="signup.php"><i class="fa fa-user-plus"></i>Sign Up</a></li>
                    <li><a href="404.php"><i class="fa fa-exclamation-circle"></i>404 Page</a></li>                  
                </ul>
            </div>
            <div class="tab-pane fade" id="comments" role="tabpanel">
                <div class="menu-heading">
                    <h3>Comments</h3>
                </div>
                <ul class="comments-wrap">
                    <li><a href="javascript:;"><img src="public/images/profile.jpg" alt="profile 02" class="rounded-circle">Lory Doe<i class="fa fa-circle text-success"></i></a></li>
                    <li><a href="javascript:;"><img src="public/images/profile.jpg" alt="profile 03" class="rounded-circle">Loream Ipsum<i class="fa fa-circle text-success"></i></a></li>
                    <li><a href="javascript:;"><img src="public/images/profile.jpg" alt="profile 04" class="rounded-circle">Loream Ipsum<i class="fa fa-circle text-success"></i></a></li>
                    <li><a href="javascript:;"><img src="public/images/profile.jpg" alt="profile 05" class="rounded-circle">Loream Ipsum<i class="fa fa-circle text-muted"></i></a></li>
                    <li><a href="javascript:;"><img src="public/images/profile.jpg" alt="profile 06" class="rounded-circle">Loream Ipsum <i class="fa fa-circle text-muted"></i></a></li>
                    <li><a href="javascript:;"><img src="public/images/profile.jpg" alt="profile 07" class="rounded-circle">Loream Ipsum<i class="fa fa-circle text-muted"></i></a></li>
                    <li><a href="javascript:;"><img src="public/images/profile.jpg" alt="profile 08" class="rounded-circle">Loream Ipsum<i class="fa fa-circle text-success"></i></a></li>
                    <li><a href="javascript:;"><img src="public/images/profile.jpg" alt="profile 09" class="rounded-circle">Loream Ipsum<i class="fa fa-circle text-success"></i></a></li>
                    <li><a href="javascript:;"><img src="public/images/profile.jpg" alt="profile 10" class="rounded-circle">Loream Ipsum<i class="fa fa-circle text-muted "></i></a></li>
                    <li><a href="javascript:;"><img src="public/images/profile.jpg" alt="profile 11" class="rounded-circle">Loream Ipsum<i class="fa fa-circle text-success"></i></a></li>
                    <li><a href="javascript:;"><img src="public/images/profile.jpg" alt="profile 12" class="rounded-circle">Loream Ipsum<i class="fa fa-circle text-success"></i></a></li>
                    <li><a href="javascript:;"><img src="public/images/profile.jpg" alt="profile 13" class="rounded-circle">Loream Ipsum<i class="fa fa-circle text-muted"></i></a></li>

                </ul>
            </div>
            <div class="tab-pane fade" id="charts" role="tabpanel">
                <div class="menu-heading">Bar Chart</div>
                <div class="chart-wrapper">
                    <canvas id="barChart"  height="180"></canvas>
                </div>
            </div>
            <div class="tab-pane fade" id="calender" role="tabpanel">
                <div class="menu-heading">Today</div>
                <ul class="calender-wrap">
                    <li>
                        <a href="javascript:;">
                            <div class="activity-timing">
                                <span>9:00 AM</span>
                            </div>
                            <div class="activity-name">Loream Ipsum dolor amet</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <div class="activity-timing">
                                <span>10:00 AM</span>
                            </div>
                            <div class="activity-name">Loream Ipsum dolor amet</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <div class="activity-timing">
                                <span>11:00 AM</span>
                            </div>
                            <div class="activity-name">Loream Ipsum dolor amet</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <div class="activity-timing">
                                <span>3:00 PM</span>
                            </div>
                            <div class="activity-name">Loream Ipsum dolor amet</div>
                        </a>
                    </li>
                </ul>
                <div class="menu-heading">Tomorrow</div>
                <ul class="calender-wrap">
                    <li>
                        <a href="javascript:;">
                            <div class="activity-timing">
                                <span>10:00 AM</span>
                            </div>
                            <div class="activity-name">Loream Ipsum dolor </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <div class="activity-timing">
                                <span>11:00 AM</span>
                            </div>
                            <div class="activity-name">Loream Ipsum dolor </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <div class="activity-timing">
                                <span>12:00 PM</span>
                            </div>
                            <div class="activity-name">Loream Ipsum dolor amet</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <div class="activity-timing">
                                <span>3:00 PM</span>
                            </div>
                            <div class="activity-name">Loream Ipsum dolor </div>
                        </a>
                    </li>
                </ul>
                <div class="menu-heading">10th April 2019</div>
                <ul class="calender-wrap">
                    <li>
                        <a href="javascript:;">
                            <div class="activity-timing">
                                <span>9:00 AM</span>
                            </div>
                            <div class="activity-name">Loream Ipsum dolor amet</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <div class="activity-timing">
                                <span>10:00 AM</span>
                            </div>
                            <div class="activity-name">Loream Ipsum dolor amet</div>
                        </a>
                    </li>                  
                </ul>
            </div>

            <div class="tab-pane fade notification" id="notification" role="tabpanel">
                <ul class="dropdown-wrapper" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                    <li>
                        <h6>Notifications</h6>
                        <label class="label bg-danger">New</label>
                    </li>
                    <li>
                        <div class="media">
                            <img class="rounded-circle" src="public/images/profile.jpg" alt="profile">
                            <div class="media-body">
                                <h5 class="notification-user">Lory Doe</h5>
                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                <span class="notification-time">30 minutes ago</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <img class="rounded-circle" src="public/images/profile.jpg" alt="profile">
                            <div class="media-body">
                                <h5 class="notification-user">Joseph William</h5>
                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                <span class="notification-time">30 minutes ago</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <img class="rounded-circle" src="public/images/profile.jpg" alt="profile">
                            <div class="media-body">
                                <h5 class="notification-user">Sara Soudein</h5>
                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                <span class="notification-time">30 minutes ago</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </aside>
    <div class="main-content">
        <!--  Main  content Starts Here  -->    



