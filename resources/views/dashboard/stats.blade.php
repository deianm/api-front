<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{!! URL::asset('dashboard-assets/img/apple-icon.png') !!}" />
    <link rel="icon" type="image/png" href="{!! URL::asset('dashboard-assets/img/favicon.png') !!}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Material Dashboard by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{!! URL::asset('dashboard-assets/css/bootstrap.min.css') !!}" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="{!! URL::asset('dashboard-assets/css/material-dashboard.css') !!}" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{!! URL::asset('dashboard/css/demo.css') !!}" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>

<div class="wrapper">

    <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
        <!--
            Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

            Tip 2: you can also add an image using data-image tag
        -->

        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text">
                TEN K CLUB
            </a>
        </div>

        <div class="sidebar-wrapper">
            <ul class="nav">
                <li >
                    <a href="/dashboard">
                        <i class="material-icons">dashboard</i>
                        <p>Feed</p>
                    </a>
                </li>
                <li>
                    <a href="/dashboard/offers">
                        <i class="material-icons">library_books</i>
                        <p>Offers</p>
                    </a>
                </li>
                <li class="active">
                    <a href="/dashboard/stats">
                        <i class="material-icons">bubble_chart</i>
                        <p>Stats</p>
                    </a>
                </li>
                <li>
                    <a href="/dashboard/users">
                        <i class="material-icons">person</i>
                        <p>Users</p>
                    </a>
                </li>
                <li>
                    <a href="/dashboard/notifications">
                        <i class="material-icons text-gray">notifications</i>
                        <p>Notifications</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-transparent navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Material Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="/logout" class="dropdown-toggle">
                                <i class="material-icons">forward</i>
                                <p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">notifications</i>
                                <span class="notification">5</span>
                                <p class="hidden-lg hidden-md">Notifications</p>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Mike John responded to your email</a></li>
                                <li><a href="#">You have 5 new tasks</a></li>
                                <li><a href="#">You're now friend with Andrew</a></li>
                                <li><a href="#">Another Notification</a></li>
                                <li><a href="#">Another One</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons">person</i>
                                <p class="hidden-lg hidden-md">Profile</p>
                            </a>
                        </li>
                    </ul>

                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group  is-empty">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="material-input"></span>
                        </div>
                        <button type="submit" class="btn btn-white btn-round btn-just-icon">
                            <i class="material-icons">search</i><div class="ripple-container"></div>
                        </button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="purple">
                                    <i class="fa fa-thumbs-o-up"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Instagram Likes From Offers</p>
                                    <h3 class="title">211,543</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Just Updated
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="purple">
                                    <i class="fa fa-instagram"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Endorsers</p>
                                    <h3 class="title">45</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Just Updated
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="purple">
                                    <i class="fa fa-check-circle-o"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Offers</p>
                                    <h3 class="title">19</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Just Updated
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="purple">
                                    <i class="fa fa-usd"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Cost</p>
                                    <h3 class="title">$24,105.80</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons">update</i> Just Updated
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="/">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Instructions
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>
                </p>
            </div>
        </footer>
    </div>
</div>

</body>

<!--   Core JS Files   -->
<script src="{!! URL::asset('dashboard-assets/js/jquery-3.1.0.min.js') !!}" type="text/javascript"></script>
<script src="{!! URL::asset('dashboard-assets/js/bootstrap.min.js') !!}" type="text/javascript"></script>
<script src="{!! URL::asset('dashboard-assets/js/material.min.js') !!}" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="{!! URL::asset('dashboard-assets/js/chartist.min.js') !!}"></script>

<!--  Notifications Plugin    -->
<script src="{!! URL::asset('dashboard-assets/js/bootstrap-notify.js') !!}"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Material Dashboard javascript methods -->
<script src="{!! URL::asset('dashboard-assets/js/material-dashboard.js') !!}"></script>

<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{!! URL::asset('dashboard-assets/js/demo.js') !!}"></script>


</html>
