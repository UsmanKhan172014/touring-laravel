<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="TOURING PROJECT - Premium site for city tours agencies, transfers and tickets.">
    <title>TRAVELHOLIC</title>

    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Gochi+Hand|Montserrat:300,400,700" rel="stylesheet">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vendors.css') }}" rel="stylesheet">

    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

</head>
<body>

<div class="layer"></div>

<header>
    <div id="top_line">
        <div class="container">
            <div class="row">
                <div class="col-6"><i class="icon-phone"></i><strong>+92 3876475773</strong></div>
                <div class="col-6">
                    <ul id="top_links">
                        {{-- <li><a href="{{ url("/login") }}" id="access_link">Sign in</a></li>> --}}
                        @guest
                        <li><a href="{{ url("/login") }}" >Sign in</a></li>>
                        @endguest
                        @auth
                            <li><a href="{{ route('dashboard') }}" >Dashboard</a></li>>
                        @endauth

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-3">
                <div id="logo_home">
                    <h1><a href="{{ route('home') }}" title="TRAVELHOLIC.pk">TRAVELHOLIC</a></h1>
                </div>
            </div>
            <nav class="col-9">
                <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                <div class="main-menu">
                    <div id="header_menu">
                        <img src="img/logo.png" width="160" height="34" alt="TRAVELHOLIC.pk" data-retina="true">
                    </div>
                    <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                    <ul>
                        <li class="submenu">
                            <a href="{{ route("home") }}" class="show-submenu">Home</a>

                        </li>
                        <li class="submenu">
                            <a href="{{ url("/tour") }}" class="show-submenu">Tours</a>
                        </li>
                        <li class="submenu">
                            <a href="{{ url("/hotel") }}" class="show-submenu">Hotels </a>
                        </li>
                        <li class="submenu">
                            <a href="{{ url("/vehicle") }}" class="show-submenu">Vehicles </a>
                        </li>
                        <li class="submenu">
                            <a href="{{ url("/about") }}" class="show-submenu">About</a>

                        </li>
                        <li class="submenu">
                            <a href="{{ url("/blog") }}" class="show-submenu">Blog</a>

                        </li>
                    </ul>
                </div><!-- End main-menu -->

            </nav>
        </div>
    </div><!-- container -->
</header><!-- End Header -->


@yield('content')

<footer class="revealed">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Need help?</h3>
                <a href="tel://+92 3876475773" id="phone">+92 3876475773</a>
                <a href="mailto:prjoect@gmail.com" id="email_footer">prjoect@gmail.com</a>
            </div>
            <div class="col-md-3">
                <h3>About</h3>
                <ul>
                    <li><a href="{{ route("about") }}">About us</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="{{ route("login") }}">Login</a></li>
                    <li><a href="{{ route("register") }}">Register</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h3>Discover</h3>
                <ul>
                    <li><a href="{{ url("blog") }}">Community blog</a></li>
                    <li><a href="#">Tour guide</a></li>
                    <li><a href="#">Wishlist</a></li>
                    <li><a href="#">Gallery</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h3>Settings</h3>
                <div class="styled-select">
                    <select name="lang" id="lang">
                        <option value="English" selected>English</option>
                        <option value="French">French</option>
                        <option value="Spanish">Spanish</option>
                        <option value="Russian">Russian</option>
                    </select>
                </div>
                <div class="styled-select">
                    <select name="currency" id="currency">
                        <option value="USD" selected>USD</option>
                        <option value="PKR">PKR</option>
                        <option value="EUR">EUR</option>
                    </select>
                </div>
            </div>
        </div><!-- End row -->
        <div class="row">
            <div class="col-md-12">
                <div id="social_footer">
                    <ul>
                        <li><a href="{{ url("//www.facebook.com") }}"><i class="icon-facebook"></i></a></li>
                        <li><a href="{{ url("//www.twitter.com") }}"><i class="icon-twitter"></i></a></li>
                        <li><a href="{{ url("//www.google.com") }}"><i class="icon-google"></i></a></li>
                        <li><a href="{{ url("//www.instagram.com") }}"><i class="icon-instagram"></i></a></li>
                        <li><a href="{{ url("//www.pinterest.com") }}"><i class="icon-pinterest"></i></a></li>
                        <li><a href="{{ url("//www.vimeo.com") }}"><i class="icon-vimeo"></i></a></li>
                        <li><a href="{{ url("//www.youtube.com") }}"><i class="icon-youtube-play"></i></a></li>
                    </ul>
                    <p>© TOURING PROJECT  2022</p>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
</footer><!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

<!-- Search Menu -->
<div class="search-overlay-menu">
    <span class="search-overlay-close"><i class="icon_set_1_icon-77"></i></span>
    <form role="search" id="searchform" method="get">
        <input value="" name="q" type="search" placeholder="Search..." />
        <button type="submit"><i class="icon_set_1_icon-78"></i>
        </button>
    </form>
</div><!-- End Search Menu -->

<!-- Sign In Popup -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
    <div class="small-dialog-header">
        <h3>Sign In</h3>
    </div>
    <form>
        <div class="sign-in-wrapper">
            <a href="#0" class="social_bt facebook">Login with Facebook</a>
            <a href="#0" class="social_bt google">Login with Google</a>
            <div class="divider"><span>Or</span></div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email">
                <i class="icon_mail_alt"></i>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" id="password" value="">
                <i class="icon_lock_alt"></i>
            </div>
            <div class="clearfix add_bottom_15">
                <div class="checkboxes float-left">
                    <input id="remember-me" type="checkbox" name="check">
                    <label for="remember-me">Remember Me</label>
                </div>
                <div class="float-right"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
            </div>
            <div class="text-center"><input type="submit" value="Log In" class="btn_login"></div>
            <div class="text-center">
                Don’t have an account? <a href="https://demos.daniraj.com/fy/register.html#">Sign up</a>
            </div>
            <div id="forgot_pw">
                <div class="form-group">
                    <label>Please confirm login email below</label>
                    <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                    <i class="icon_mail_alt"></i>
                </div>
                <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
                <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
            </div>
        </div>
    </form>
    <!--form -->
</div>
<!-- /Sign In Popup -->

<!-- Common scripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/common_scripts_min.js"></script>
<script src="js/functions.js"></script>

<script>
    $('input.date-pick').datepicker('setDate', 'today');
    $('input.time-pick').timepicker({
        minuteStep: 15,
        showInpunts: false
    })
</script>

<script src="js/jquery.ddslick.js"></script>
<script>
    $("select.ddslick").each(function() {
        $(this).ddslick({
            showSelectedHTML: true
        });
    });
</script>

<!-- Check box and radio style iCheck -->
<script>
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-grey',
        radioClass: 'iradio_square-grey'
    });
</script>


</body>
</html>
