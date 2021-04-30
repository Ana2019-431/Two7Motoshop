<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Two7Motoshop(Admin)</title>
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
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">Two7Motoshop (Admin) </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons">
                            <li class="active"><a href="message.php"><i class="icon-envelope"></i></a></li>

                            <li><a href="charts.php"><i class="icon-bar-chart"></i></a></li>
                        </ul>
                        <form class="navbar-search pull-left input-append" action="#">
                            <input type="text" class="span3">
                            <button class="btn" type="button">
                            <i class="icon-search"></i>
                        </button>
                        </form>
                        <ul class="nav pull-right">

                            <li><a href="#">Support </a></li>
                            <li class="nav-user dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="images/pngegg.png" class="nav-avatar" />
                                    <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="activity.php">Your Profile</a></li>
                                    <!-- <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li> -->
                                    <li class="divider"></li>
                                    <li><a href="other-login.php">Logout</a></li>
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
                                <li class="active"><a href="index.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                            <!--/.widget-nav-->
                            <ul class="widget widget-menu unstyled">
                                <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                                </i>More Pages </a>
                                    <ul id="togglePages" class="collapse unstyled">
                                        <li><a href="other-login.php"><i class="icon-inbox"></i>Login </a></li>
                                        <li><a href="other-user-listing.php"><i class="icon-inbox"></i>All Users </a></li>
                                    </ul>
                                </li>
                                <li><a href="other-login.php"><i class="menu-icon icon-signout"></i>Logout </a></li>
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a href="#" class="btn-box big span4"><i class=" icon-random"></i><b>65%</b>
                                        <p class="text-muted">
                                            Growth</p>
                                    </a><a href="other-user-listing.php" class="btn-box big span4"><i class="icon-user"></i><b>15</b>
                                        <p class="text-muted">
                                            New Users</p>
                                    </a><a href="charts.php" class="btn-box big span4"><i class="icon-money"></i><b>Rp. 15.257.980</b>
                                        <p class="text-muted">
                                            Profit</p>
                                    </a>
                                </div>
                                <div class="btn-box-row row-fluid">
                                    <div class="span8">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="message.php" class="btn-box small span4"><i class="icon-envelope"></i><b>Messages</b>
                                                </a><a href="other-user-listing.php" class="btn-box small span4"><i class="icon-group"></i><b>Users</b>
                                                </a><a href="activity.php" class="btn-box small span4"><i class="icon-exchange"></i><b>Admin</b>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="span12">
                                                <a href="charts.php" class="btn-box small span4"><i class="icon-money"></i><b>Total Sales</b>
                                                </a><a href="charts.php" class="btn-box small span4"><i class="icon-sort-down"></i><b>Bounce
                                                    Rate</b> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="widget widget-usage unstyled span4">
                                        <li>
                                            <p>
                                                <strong>Shop By Brand</strong> <span class="pull-right small muted">58%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar" style="width: 58%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Shop By Bike</strong> <span class="pull-right small muted">80%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-success" style="width: 80%;">
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <p>
                                                <strong>Apperel</strong> <span class="pull-right small muted">44%</span>
                                            </p>
                                            <div class="progress tight">
                                                <div class="bar bar-warning" style="width: 44%;">
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--/#btn-controls-->
                            <!-- <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Profit Chart</h3>
                                </div>
                                <div class="module-body">
                                    <div class="chart inline-legend grid">
                                        <div id="placeholder2" class="graph" style="height: 500px">
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <!--/.module-->
                            <div class="module hide">
                                <div class="module-head">
                                    <h3>
                                        Adjust Budget Range</h3>
                                </div>
                                <div class="module-body">
                                    <div class="form-inline clearfix">
                                        <a href="#" class="btn pull-right">Update</a>
                                        <label for="amount">
                                            Price range:</label> &nbsp;
                                        <input type="text" id="amount" class="input-" />
                                    </div>
                                    <hr />
                                    <div class="slider-range">
                                    </div>
                                </div>
                            </div>
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        DataTables</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Number
                                                </th>
                                                <th>
                                                    Item
                                                </th>
                                                <th>
                                                    Stock
                                                </th>
                                                <th>
                                                    Price
                                                </th>
                                                <th>
                                                    Quality
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    Dainese SP-R
                                                </td>
                                                <td>
                                                    10
                                                </td>
                                                <td class="center">
                                                    4.950.000
                                                </td>
                                                <td class="center">
                                                    Original
                                                </td>
                                            </tr>
                                            <tr class="even gradeC">
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    Shoei X-14/X Spirit III Marquez America TC-2
                                                </td>
                                                <td>
                                                    5
                                                </td>
                                                <td class="center">
                                                    11.500.000
                                                </td>
                                                <td class="center">
                                                    Original
                                                </td>
                                            </tr>
                                            <tr class="odd gradeA">
                                                <td>
                                                    3
                                                </td>
                                                <td>
                                                    Ohlins Rear Shock Kawasaki Z636
                                                </td>
                                                <td>
                                                    6
                                                </td>
                                                <td class="center">
                                                    22.500.000
                                                </td>
                                                <td class="center">
                                                    Original
                                                </td>
                                            </tr>
                                            <tr class="even gradeA">
                                                <td>
                                                    4
                                                </td>
                                                <td>
                                                    Brembo GP4RS Calipers
                                                </td>
                                                <td>
                                                    2
                                                </td>
                                                <td class="center">
                                                    14.500.000
                                                </td>
                                                <td class="center">
                                                    Original
                                                </td>
                                            </tr>
                                            <tr class="odd gradeA">
                                                <td>
                                                    5
                                                </td>
                                                <td>
                                                    Accossato Clutch
                                                </td>
                                                <td>
                                                    4
                                                </td>
                                                <td class="center">
                                                    2.100.000
                                                </td>
                                                <td class="center">
                                                    Original
                                                </td>
                                            </tr>
                                        </tbody>                                       
                                    </table>
                                </div>
                            </div>
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2021 Admin - Two7Motoshop.com </b>All rights reserved.
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>

    </body>