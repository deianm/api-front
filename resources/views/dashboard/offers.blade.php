<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{!! URL::asset('dashboard-assets/img/apple-icon.png') !!}"/>
    <link rel="icon" type="image/png" href="{!! URL::asset('dashboard-assets/img/favicon.png') !!}"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>Material Dashboard by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>


    <!-- Bootstrap core CSS     -->
    <link href="{!! URL::asset('dashboard-assets/css/bootstrap.min.css') !!}" rel="stylesheet"/>
    <link href="{!! URL::asset('dashboard-assets/css/bootstrap-datepicker.css') !!}" rel="stylesheet"/>

    <!--  Material Dashboard CSS    -->
    <link href="{!! URL::asset('dashboard-assets/css/material-dashboard.css') !!}" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{!! URL::asset('dashboard/css/demo.css') !!}" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet'
          type='text/css'>
    <style>
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
                <li>
                    <a href="/dashboard">
                        <i class="material-icons">dashboard</i>
                        <p>Feed</p>
                    </a>
                </li>
                <li class="active">
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
                            <i class="material-icons">search</i>
                            <div class="ripple-container"></div>
                        </button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div id="offer_table" class="row">

                    <div class="col-lg-12 col-md-12">
                        <div class="card card-nav-tabs">
                            <div class="card-header" data-background-color="purple">
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper"
                                         style="height: 10em; display: flex;align-items: center;justify-content: center">
                                        <ul class="nav nav-tabs" data-tabs="tabs">
                                            <li class="">
                                                <a href="#newoffer" data-toggle="tab" aria-expanded="false">
                                                    <i class="material-icons">input</i>
                                                    Add Offer
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a href="#profile" data-toggle="tab" aria-expanded="true">
                                                    <i class="material-icons">stars</i>
                                                    Current Offers
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#messages" data-toggle="tab" aria-expanded="false">
                                                    <i class="material-icons">stop</i>
                                                    Expired Offers
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="profile">
                                        <table class="table">
                                            <thead class="text-primary">
                                            <tr>
                                                <th style="text-align: center;">Offer ID</th>
                                                <th style="text-align: center;">Days Left</th>
                                                <th style="text-align: center;">Description</th>
                                                <th style="text-align: center;">Instagram Likes</th>
                                                <th style="text-align: center;">Post Count</th>
                                                <th style="text-align: center;">Offer Cost</th>
                                                <th style="text-align: center;">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($current as $current_offer)
                                                <tr>
                                                    <td style="text-align: center;">
                                                        {{ $current_offer['id'] }}
                                                    </td>
                                                    <td style="text-align: center;">
                                                        {{ $current_offer['days_left'] }}
                                                    </td>
                                                    <td style="text-align: center;">
                                                        {{ $current_offer['hashtag'] }}
                                                        <br> <!--BREAK -->
                                                        {{ $current_offer['offer_details'] }}
                                                    </td>
                                                    <td style="text-align: center;">
                                                        {{ $current_offer['offer_likes'] }}
                                                    </td>
                                                    <td style="text-align: center;">
                                                        {{ $current_offer['offer_cost'] }}
                                                    </td>
                                                    <td style="text-align: center;">
                                                        {{ $current_offer['offer_posts'] }}
                                                    </td>
                                                    <td class="center-obj">
                                                        <a>
                                                            <button style="margin-top: 1em;"
                                                                    onclick="cancel_offer({{$current_offer['id']}})" class="btn btn-danger btn-round">End Offer
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="messages">
                                        <table class="table">
                                            <thead class="text-primary">
                                            <tr>
                                                <th style="text-align: center;">Offer ID</th>
                                                <th style="text-align: center;">Description</th>
                                                <th style="text-align: center;">Instagram Likes</th>
                                                <th style="text-align: center;">Post Count</th>
                                                <th style="text-align: center;">Offer Cost</th>
                                                <!-- <th style="text-align: center;">Action</th> -->

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($expired as $expired_offer)
                                                <tr>
                                                    <td style="text-align: center;">
                                                        {{ $expired_offer->id }}
                                                    </td>
                                                    <td style="text-align: center;">
                                                        {{ $expired_offer->hashtag }}
                                                        <br>
                                                        {{ $expired_offer->offer_details }}
                                                    </td>
                                                    <td style="text-align: center;">
                                                        {{ $expired_offer->offer_likes }}
                                                    </td>
                                                    <td style="text-align: center;">
                                                        {{ $expired_offer->offer_cost }}
                                                    </td>
                                                    <td style="text-align: center;">
                                                        {{ $expired_offer->offer_posts }}
                                                    </td>
                                                    <!--
                                                    <td class="center-obj">
                                                        <a target="_blank" href="https://www.instagram.com//?hl=en">
                                                            <button style="margin-top: 1em;background-color:#4caf50;"
                                                                    class="btn btn-primary btn-round">Duplicate Offer
                                                            </button>
                                                        </a>
                                                    </td>
                                                    -->
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane" id="newoffer">
                                        <div class="card-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label">Hashtag To Use</label>
                                                            <input id="hashtag" type="text" class="form-control">
                                                            <span class="material-input"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group label-floating is-empty">
                                                            <label class="control-label">Photo To Use</label>
                                                            <input  type="text" class="form-control">
                                                            <span class="material-input"></span></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label class="control-label">Start Date</label>
                                                        <div class="form-group label-floating is-empty">
                                                            <input id="start_date" class="datepicker form-control" type="text"/>
                                                            <span class="material-input"></span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <label class="control-label">End Date</label>
                                                        <div class="form-group label-floating is-empty">
                                                            <input id="end_date" class="datepicker form-control" type="text"/>
                                                            <span class="material-input"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Further Details</label>
                                                            <div class="form-group label-floating is-empty">
                                                                <label class="control-label"> Add more details for the
                                                                    Endorser please</label>
                                                                <textarea id="offer_details" class="form-control" rows="4"></textarea>
                                                                <span class="material-input"></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="center-obj">
                                                    <button onclick="create_offer()" class="btn btn-primary">Add New Offer</button>
                                                </div>
                                                <div class="clearfix"></div>
                                        </div>
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
                    &copy;<script>document.write(new Date().getFullYear())</script>
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
<script src="{!! URL::asset('dashboard-assets/js/bootstrap-datepicker.js') !!}" type="text/javascript"></script>

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

<script>

    $('.datepicker').datepicker({
        weekStart:1,
        color: 'red'
    }).on('changeDate', function(e){
        $(this).datepicker('hide');
    });


    function create_offer() {

        var data = {
            hashtag: document.getElementById('hashtag').value,
            start_date: document.getElementById('start_date').value,
            end_date: document.getElementById('end_date').value,
            offer_details: document.getElementById('offer_details').value
        };

        $.ajax({
            method: 'POST',
            url: 'http://ec2-35-163-3-65.us-west-2.compute.amazonaws.com/dashboard/create_offer',
            data: data,
            type: 'json',
            success: function(response) {
                $('#offer_table').load(' #offer_table').fadeIn('slow');
                console.log(response);
            },
            error: function(response) {
                console.log(response);
            }
        });
    }

    function cancel_offer(id) {

        var data = {
            id: id
        };

        $.ajax({
            method: 'POST',
            url: 'http://ec2-35-163-3-65.us-west-2.compute.amazonaws.com/dashboard/cancel_offer',
            data: data,
            type: 'json',
            success: function(response) {
                $('#offer_table').load(' #offer_table').fadeIn('slow');
                console.log(response);
            },
            error: function(response) {
                console.log(response);
            }
        });
    }

</script>

</html>
