<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{!! URL::asset('img/apple-icon.png') !!}">
    <link rel="icon" type="image/png" href="{!! URL::asset('img/favicon.png') !!}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Brands Sign Up 10K CLUB</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="{!! URL::asset('css/bootstrap.min.css') !!}" rel="stylesheet" />
    <link href="{!! URL::asset('css/material-kit.css') !!}" rel="stylesheet"/>
    <style>
        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body class="signup-page">
<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">10K CLUB</a>
        </div>

        <div class="collapse navbar-collapse" id="navigation-example">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="../components-documentation.html" target="_blank">
                        Instructions
                    </a>
                </li>
                <li>
                    <a href="/login" target="_self">
                        Login
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/CreativeTim" target="_blank" class="btn btn-simple btn-white btn-just-icon">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/CreativeTim" target="_blank" class="btn btn-simple btn-white btn-just-icon">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/CreativeTimOfficial" target="_blank" class="btn btn-simple btn-white btn-just-icon">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="wrapper">
    <div class="header header-filter" >
        <img src="{!! ('img/pool.jpg') !!}" style=" background-size: cover; background-position: top center; position:fixed;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                    <div class="card card-signup">
                        <form class="form" method="" action="">
                            <div class="header header-primary text-center">
                                <h4>Sign Up</h4>
                                <div class="social-line">
                                </div>
                            </div>
                            <div class="content">
                                <div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">face</i>
										</span>
                                    <input type="text" id="brand_name" class="form-control" placeholder="Brand...">
                                </div>
                                <div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">email</i>
										</span>
                                    <input type="text" id="email" class="form-control" placeholder="Email...">
                                </div>
                                <div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
                                    <input type="password" id="password" placeholder="Password..." class="form-control" />
                                </div>
                                <!-- If you want to add a checkbox to this form, uncomment this code

                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="optionsCheckboxes" checked>
                                        Subscribe to newsletter
                                    </label>
                                </div> -->
                            </div>
                            <div class="footer text-center">
                                <a onclick="register()" class="btn btn-simple btn-primary btn-lg">Get Started!</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; 2016, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com" target="_blank">LMi</a>
                </div>
            </div>
        </footer>

    </div>

</div>


</body>

<script>

    function register() {

        var data = {
            brand_name: document.getElementById('brand_name').value,
            email: document.getElementById('email').value,
            password: document.getElementById('password').value
        };

        $.ajax({
            type: 'POST',
            url: 'http://ec2-52-91-188-123.compute-1.amazonaws.com/auth/register',
            crossDomain: true,
            data: data,
            dataType: 'json',
            success: function (responseData, textStatus, errorThrow) {

                if(responseData.success == 'true'){
                    console.log('SUCCESS');
                    window.location.href = 'http://ec2-35-163-3-65.us-west-2.compute.amazonaws.com/dashboard';
                } else {
                    console.log('ERROR')
                }

            },
            error: function (responseData, textStatus, errorThrown) {
                console.log('500')
            }
        });
    }

</script>

<!--   Core JS Files   -->
<script src="{!! URL::asset('js/jquery.min.js') !!}" type="text/javascript"></script>
<script src="{!! URL::asset('js/bootstrap.min.js') !!}" type="text/javascript"></script>
<script src="{!! URL::asset('js/material.min.js') !!}"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{!! URL::asset('js/nouislider.min.js') !!}" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="{!! URL::asset('js/bootstrap-datepicker.js') !!}" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="{!! URL::asset('js/material-kit.js') !!}" type="text/javascript"></script>

</html>
