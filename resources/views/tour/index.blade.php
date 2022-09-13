@extends('layouts.frontend')
@section('nav','fixed-top')
@section('content')
    <section class="parallax-window" data-parallax="scroll" data-image-src="img/about_bg.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>TOURS </h1>
                <p>We offer many types of tour packages in Pakistan tour travel here.</p>
            </div>
        </div>
    </section>
    <!-- End Section -->

    <main>

        <div id="position">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a>
                    </li>
                    <li><a href="#">Category</a>
                    </li>
                    <li>Page active</li>
                </ul>
            </div>
        </div>
        <!-- Position -->

        <div class="collapse" id="collapseMap">
            <div id="map" class="map"></div>
        </div>
        <!-- End Map -->


        <div class="container margin_60">

            <div class="row">
                <aside class="col-lg-3">
                    <p>
                        <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
                    </p>

                    <div class="box_style_cat">
                        <ul id="cat_nav">
                            <li><a href="#" id="active"><i class="icon_set_1_icon-51"></i>All tours <span>(141)</span></a>
                            </li>
                            <li><a href="#"><i class="icon_set_1_icon-3"></i>City sightseeing <span>(20)</span></a>
                            </li>
                            <li><a href="#"><i class="icon_set_1_icon-4"></i>Museum tours <span>(16)</span></a>
                            </li>
                            <li><a href="#"><i class="icon_set_1_icon-44"></i>Historic Buildings <span>(12)</span></a>
                            </li>
                            <li><a href="#"><i class="icon_set_1_icon-37"></i>Walking tours <span>(11)</span></a>
                            </li>
                            <li><a href="#"><i class="icon_set_1_icon-14"></i>Eat & Drink <span>(20)</span></a>
                            </li>
                            <li><a href="#"><i class="icon_set_1_icon-43"></i>Churces <span>(08)</span></a>
                            </li>
                            <li><a href="#"><i class="icon_set_1_icon-28"></i>Skyline tours <span>(11)</span></a>
                            </li>
                        </ul>
                    </div>

                    <div id="filters_col">
                        <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt"><i class="icon_set_1_icon-65"></i>Filters</a>
                        <div class="collapse show" id="collapseFilters">
                            <div class="filter_type">
                                <h6>Price</h6>
                                <input type="text" id="range" name="range" value="">
                            </div>
                            <div class="filter_type">
                                <h6>Rating</h6>
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox"><span class="rating">
											<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i>
											</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox"><span class="rating">
											<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i>
											</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox"><span class="rating">
											<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i>
											</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox"><span class="rating">
											<i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
											</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox"><span class="rating">
											<i class="icon-smile voted"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i><i class="icon-smile"></i>
											</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="filter_type">
                                <h6>Facility</h6>
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox">Pet allowed
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">Groups allowed
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">Tour guides
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox">Access for disabled
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--End collapse -->
                    </div>
                    <!--End filters col-->
                    <div class="box_style_2">
                        <i class="icon_set_1_icon-57"></i>
                        <h4>Need <span>Help?</span></h4>
                        <a href="tel://004542344599" class="phone">+45 423 445 99</a>
                        <small>Monday to Friday 9.00am - 7.30pm</small>
                    </div>
                </aside>
                <!--End aside -->
                <div class="col-lg-9">

                    <div id="tools">
                        <div class="row">
                            <div class="col-md-3 col-sm-4 col-6">
                                <div class="styled-select-filters">
                                    <select name="sort_price" id="sort_price">
                                        <option value="" selected>Sort by price</option>
                                        <option value="lower">Lowest price</option>
                                        <option value="higher">Highest price</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-6">
                                <div class="styled-select-filters">
                                    <select name="sort_rating" id="sort_rating">
                                        <option value="" selected>Sort by ranking</option>
                                        <option value="lower">Lowest ranking</option>
                                        <option value="higher">Highest ranking</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-4 d-none d-sm-block text-right">
                                <a href="all_tours_grid.html" class="bt_filters"><i class="icon-th"></i></a> <a href="#" class="bt_filters"><i class=" icon-list"></i></a>
                            </div>

                        </div>
                    </div>
                    <!--/tools -->



                    <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.2s">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="ribbon_3 popular"><span>Popular</span>
                                </div>
                                <div class="wishlist">
                                    <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                                </div>
                                <div class="img_list">
                                    <a href="single_tour.html"><img src="img/tour_box_2.jpg" alt="Image">
                                        <div class="short_info"><i class="icon_set_1_icon-44"></i>Churches</div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="tour_list_desc">
                                    <div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile"></i><small>(75)</small>
                                    </div>
                                    <h3><strong>Notredame</strong> tour</h3>
                                    <p>There are several reasons which clearly show the Importance of Pakistan Northern Areas as Tourists come across from all over the world. There are some following reasons why Trip to Pakistan in your Holidays</p>
                                    <ul class="add_info">
                                        <li>
                                            <div class="tooltip_styled tooltip-effect-4">
                                                <span class="tooltip-item"><i class="icon_set_1_icon-83"></i></span>
                                                <div class="tooltip-content">
                                                    <h4>Schedule</h4>
                                                    <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM
                                                    <br>
                                                    <strong>Saturday</strong> 09.00 AM - 5.30 PM
                                                    <br>
                                                    <strong>Sunday</strong> <span class="label label-danger">Closed</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tooltip_styled tooltip-effect-4">
                                                <span class="tooltip-item"><i class="icon_set_1_icon-41"></i></span>
                                                <div class="tooltip-content">
                                                    <h4>Address</h4> ALL Pakistan
                                                    <br>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tooltip_styled tooltip-effect-4">
                                                <span class="tooltip-item"><i class="icon_set_1_icon-97"></i></span>
                                                <div class="tooltip-content">
                                                    <h4>Languages</h4> English - French - Chinese - Russian - Italian
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tooltip_styled tooltip-effect-4">
                                                <span class="tooltip-item"><i class="icon_set_1_icon-27"></i></span>
                                                <div class="tooltip-content">
                                                    <h4>Parking</h4> Free Parking
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <div class="price_list">
                                    <div><sup></sup>2500<span class="normal_price_list">3500</span><small>*Per person</small>
                                        <p><a href="single_tour.html" class="btn_1">Details</a>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End strip -->


                    <div class="strip_all_tour_list wow fadeIn" data-wow-delay="0.4s">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <div class="ribbon_3"><span>Top rated</span>
                                </div>
                                <div class="wishlist">
                                    <a class="tooltip_flip tooltip-effect-1" href="javascript:void(0);">+<span class="tooltip-content-flip"><span class="tooltip-back">Add to wishlist</span></span></a>
                                </div>
                                <div class="img_list">
                                    <a href="single_tour1.html"><img src="img/tour_box_4.jpg" alt="Image">
                                        <div class="short_info"><i class="icon_set_1_icon-37"></i>Walking tour</div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="tour_list_desc">
                                    <div class="rating"><i class="icon-smile voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile  voted"></i><i class="icon-smile"></i><small>(75)</small>
                                    </div>
                                    <h3><strong>Pompidue</strong> tour</h3>
                                    <p>Tour to places that are very safe and secure in all terms. A comprehensive website with many awards as a leading Operator in Pakistan.</p>
                                    <ul class="add_info">
                                        <li>
                                            <div class="tooltip_styled tooltip-effect-4">
                                                <span class="tooltip-item"><i class="icon_set_1_icon-83"></i></span>
                                                <div class="tooltip-content">
                                                    <h4>Schedule</h4>
                                                    <strong>Monday to Friday</strong> 09.00 AM - 5.30 PM
                                                    <br>
                                                    <strong>Saturday</strong> 09.00 AM - 5.30 PM
                                                    <br>
                                                    <strong>Sunday</strong> <span class="label label-danger">Closed</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tooltip_styled tooltip-effect-4">
                                                <span class="tooltip-item"><i class="icon_set_1_icon-41"></i></span>
                                                <div class="tooltip-content">
                                                    <h4>Address</h4> All pakistan
                                                    <br>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tooltip_styled tooltip-effect-4">
                                                <span class="tooltip-item"><i class="icon_set_1_icon-97"></i></span>
                                                <div class="tooltip-content">
                                                    <h4>Languages</h4> English - French - Chinese - Russian - Italian
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="tooltip_styled tooltip-effect-4">
                                                <span class="tooltip-item"><i class="icon_set_1_icon-27"></i></span>
                                                <div class="tooltip-content">
                                                    <h4>Parking</h4> Free parking
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <div class="price_list">
                                    <div><sup></sup>2500<span class="normal_price_list">3500</span><small>*Per person</small>
                                        <p><a href="single_tour.html" class="btn_1">Details</a>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End strip -->



                    <hr>

                </div>
                <!-- End col lg-9 -->
            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </main>
    <!-- End main -->

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
                        <li><a href="about.html">About us</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="#sign-in-dialog">Login</a></li>
                        <li><a href="#sign-in-dialog">Register</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Discover</h3>
                    <ul>
                        <li><a href="#">Community blog</a></li>
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
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-google"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                            <li><a href="#"><i class="icon-pinterest"></i></a></li>
                            <li><a href="#"><i class="icon-vimeo"></i></a></li>
                            <li><a href="#"><i class="icon-youtube-play"></i></a></li>
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
                    Don’t have an account? <a href="javascript:void(0);">Sign up</a>
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

@endsection
