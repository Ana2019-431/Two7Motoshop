<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="css/theme.css" rel="stylesheet">
    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>

<body>

    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <i class="icon-reorder shaded"></i>
                </a>

                <a class="brand" href="index.html">
			  		Admin
			  	</a>

                <div class="nav-collapse collapse navbar-inverse-collapse">
                    <ul class="nav nav-icons">
                        <li class="active">
                            <a href="message.html">
                                <i class="icon-envelope"></i>
                            </a>
                        </li>

                        <li>
                            <a href="charts.html">
                                <i class="icon-bar-chart"></i>
                            </a>
                        </li>
                    </ul>

                    <form class="navbar-search pull-left input-append" action="#">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
							<i class="icon-search"></i>
						</button>
                    </form>

                    <ul class="nav pull-right">


                        <li><a href="#">
							Support
						</a></li>
                        <li class="nav-user dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/aldin.jpeg" class="nav-avatar" />
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="activity.html">Your Profile</a></li>
                                <!-- <li><a href="#">Edit Profile</a></li>
                                <li><a href="#">Account Settings</a></li> -->
                                <li class="divider"></li>
                                <li><a href="other-login.html">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.nav-collapse -->
            </div>
        </div>
        <!-- /navbar-inner -->
    </div>
    <!-- /navbar -->



    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="span3">
                    <div class="sidebar">

                        <ul class="widget widget-menu unstyled">
                            <li class="active">
                                <a href="index.html">
                                    <i class="menu-icon icon-dashboard"></i> Dashboard
                                </a>
                            </li>

                            <li>
                                <a href="message.html">
                                    <i class="menu-icon icon-inbox"></i> Inbox
                                    <b class="label green pull-right">3</b>
                                </a>
                            </li>
                        </ul>
                        <!--/.widget-nav-->

                        <ul class="widget widget-menu unstyled">
                            <li><a href="table.html"><i class="menu-icon icon-table"></i>Tables </a></li>
                        </ul>
                        <!--/.widget-nav-->

                        <ul class="widget widget-menu unstyled">
                            <li>
                                <a class="collapsed" data-toggle="collapse" href="#togglePages">
                                    <i class="menu-icon icon-cog"></i>
                                    <i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i> More Pages
                                </a>
                                <ul id="togglePages" class="collapse unstyled">
                                    <li>
                                        <a href="other-login.html">
                                            <i class="icon-inbox"></i> Login
                                        </a>
                                    </li>

                                    <li>
                                        <a href="other-user-listing.html">
                                            <i class="icon-inbox"></i> All Users
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="other-login.html">
                                    <i class="menu-icon icon-signout"></i> Logout
                                </a>
                            </li>
                        </ul>

                    </div>
                    <!--/.sidebar-->
                </div>
                <!--/.span3-->

        </div>
        <!--/.container-->
    </div>
    <!--/.wrapper-->

    <div class="footer">
        <div class="container">


            <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.
        </div>
    </div>

    <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>