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
    <link href="{!! URL::asset('dashboard-assets/css/demo.css') !!}" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <style>
        .card-avatar-new {
            max-width: 130px;
            max-height: 130px;
            margin-left: 30%;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
        }
        .card-avatar-endorsed {
            max-width: 130px;
            max-height: 130px;
            margin-left: 25%;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0 10px 30px -12px rgba(0, 0, 0, 0.42), 0 4px 25px 0px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);
        }
        .center-obj {
            height: 5em;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>

<div class="wrapper">

    <div class="sidebar" data-color="purple" data-image="{!! URL::asset('dashboard-assets/img/sidebar-1.jpg') !!}">
        <!--
            Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

            Tip 2: you can also add an image using data-image tag
        -->

        <div class="logo" style="">
            <a href="/" class="simple-text">
                TEN K CLUB
            </a>
        </div>

        <div class="sidebar-wrapper">
            <ul class="nav">
                <li>
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
                <li>
                    <a href="/dashboard/stats">
                        <i class="material-icons">bubble_chart</i>
                        <p>Stats</p>
                    </a>
                </li>
                <li class="active">
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

        <div  id="user_table" class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card card-nav-tabs">
                            <div class="card-header" data-background-color="purple">
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper" style="height: 10em; display: flex;align-items: center;justify-content: center">
                                        <ul class="nav nav-tabs" data-tabs="tabs">
                                            <li class="active">
                                                <a href="#new_users" data-toggle="tab" aria-expanded="true">
                                                    <i class="material-icons">search</i>
                                                    Find New
                                                    <div class="ripple-container"></div></a>
                                            </li>
                                            <li class="">
                                                <a href="#pending_users" data-toggle="tab" aria-expanded="false">
                                                    <i class="material-icons">face</i>
                                                    Pending Endorsers
                                                    <div class="ripple-container"></div></a>
                                            </li>
                                            <li class="">
                                                <a href="#brand_users" data-toggle="tab" aria-expanded="false">
                                                    <i class="material-icons">face</i>
                                                    Your Endorsers
                                                    <div class="ripple-container"></div></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="new_users">
                                        <table class="table">
                                            <thead class="text-primary">
                                            <tr>
                                                <th style="text-align: center;">Image</th>
                                                <th style="text-align: center;">Name</th>
                                                <th style="text-align: center;">Followers</th>
                                                <th style="text-align: center;">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <td >
                                                        <div class="card-avatar-new">
                                                                <img class="img" src="{{ $user->profile_picture }}">
                                                        </div>
                                                    </td>
                                                    <td style="text-align: center;">
                                                        {{ $user->full_name }}
                                                    </td>
                                                    <td style="text-align: center;">
                                                        {{ $user->followers }}
                                                    </td>
                                                    <td class="center-obj">
                                                        <a target="_blank" href="https://www.instagram.com/{{ $user->user_name }}/?hl=en"><button style="margin-top: 8em;" class="btn btn-primary btn-round">View Profile</button></a>
                                                        <a><button onclick="request_to_join({{ $user->instagram_id }})" style="margin-top: 8em;background-color:#4caf50;" class="btn btn-primary btn-round">Request To Join</button></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="pending_users">
                                        <table class="table">
                                            <thead class="text-primary">
                                            <tr>
                                                <th style="text-align: center;">Image</th>
                                                <th style="text-align: center;">Name</th>
                                                <th style="text-align: center;">Followers</th>
                                                <th style="text-align: center;">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($pending_users as $pending)
                                                <tr>
                                                    <td >
                                                        <div class="card-avatar-new">
                                                            <img class="img" src="{{ $pending->profile_picture }}">
                                                        </div>
                                                    </td>
                                                    <td style="text-align: center;">
                                                        {{ $pending->full_name }}
                                                    </td>
                                                    <td style="text-align: center;">
                                                        {{ $pending->followers }}
                                                    </td>
                                                    <td class="center-obj">
                                                        <a target="_blank" href="https://www.instagram.com/{{ $pending->user_name }}/?hl=en"><button style="margin-top: 8em;" class="btn btn-primary btn-round">View Profile</button></a>
                                                        <a><button onclick="cancel_to_join({{ $pending->id }})" style="margin-top: 8em;" class="btn btn-danger btn-round">Cancel Request</button></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="brand_users">
                                        <table class="table">
                                            <thead class="text-primary">
                                            <tr>
                                                <th style="text-align: center;">Image</th>
                                                <th style="text-align: center;">Name</th>
                                                <th style="text-align: center;">Followers</th>
                                                <th style="text-align: center;">Date Joined</th>
                                                <th style="text-align: center;">Earnings</th>
                                                <th style="text-align: center;">Offer Count</th>
                                                <th style="text-align: center;">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($brand_users as $brand_user)
                                                <tr>
                                                    <td>
                                                        <div class="card-avatar-endorsed">
                                                            <img class="img" src="{{ $brand_user->profile_picture }}">
                                                        </div>
                                                    </td>
                                                    <td style="text-align: center;">
                                                        {{ $brand_user->full_name }}
                                                    </td>
                                                    <td style="text-align: center;">
                                                        {{ $brand_user->followers }}
                                                    </td>
                                                    <td style="text-align: center;">
                                                        {{ $brand_user->joined_brand_date }}
                                                    </td>
                                                    <td style="text-align: center;">
                                                        $230.94
                                                    </td>
                                                    <td style="text-align: center;">
                                                        20
                                                    </td>
                                                    <td class="center-obj">
                                                        <a target="_blank" href="https://www.instagram.com/{{ $brand_user->user_name }}/?hl=en"><button style="margin-top: 8em;" class="btn btn-primary btn-round">View </button></a>
                                                        <a target="_blank" href="https://www.instagram.com/{{ $brand_user->user_name }}/?hl=en"><button style="margin-top: 8em;" class="btn btn-warning btn-round">Message </button></a>
                                                        <a target="_blank" href="https://www.instagram.com/{{ $brand_user->user_name }}/?hl=en"><button style="margin-top: 8em;" class="btn btn-danger btn-round">Remove </button></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
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

<script>

    function request_to_join(instagram_id) {

        var data = {
            instagram_id: instagram_id
        };

        $.ajax({
            method: 'POST',
            url: 'http://ec2-35-163-3-65.us-west-2.compute.amazonaws.com/dashboard/request_join',
            data: data,
            type: 'json',
            success: function(response) {
                $('#user_table').load(' #user_table').fadeIn('slow');
                console.log(response);
            },
            error: function(response) {
                console.log(response);
            }
        });
    }

    function cancel_to_join(id) {

        var data = {
            id: id
        };

        $.ajax({
            method: 'POST',
            url: 'http://ec2-35-163-3-65.us-west-2.compute.amazonaws.com/dashboard/cancel_join',
            data: data,
            type: 'json',
            success: function(response) {
                $('#user_table').load(' #user_table').fadeIn('slow');
                console.log(response);
            },
            error: function(response) {
                console.log(response);
            }
        });
    }

</script>

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
