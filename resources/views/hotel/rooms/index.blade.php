@extends('layouts.frontend')
@section('nav','fixed-top')
@section('content')
    <section class="parallax-window" data-parallax="scroll" data-image-src="img/single_tour_bg_1.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1>Mariott Hotel</h1>
                        <span>Pakistan</span>
                        <span class="rating"><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile voted"></i><i class="icon-smile"></i><small>(75)</small></span>
                    </div>
                    <div class="col-md-4">
                        <div id="price_single_main">
                            from/per person <span><sup>PKR</sup>5000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
        <!-- End Position -->

        <div class="collapse" id="collapseMap">
            <div id="map" class="map"></div>
        </div>
        <!-- End Map -->

        <div class="container margin_60">
            <div class="row">
                <div class="col-lg-8" id="single_tour_desc">
                    <div id="single_tour_feat">
                        <ul>
                            <li><i class="icon_set_2_icon-116"></i>Plasma TV</li>
                            <li><i class="icon_set_1_icon-86"></i>Free Wifi</li>
                            <li><i class="icon_set_2_icon-110"></i>Poll</li>
                            <li><i class="icon_set_1_icon-59"></i>Breakfast</li>
                            <li><i class="icon_set_1_icon-22"></i>Pet allowed</li>
                            <li><i class="icon_set_1_icon-13"></i>Accessibiliy</li>
                            <li><i class="icon_set_1_icon-27"></i>Parking</li>
                        </ul>
                    </div>
                    <p class="d-none d-md-block d-block d-lg-none"><a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
                    </p>
                    <!-- Map button for tablets/mobiles -->
                    <div id="Img_carousel" class="slider-pro">
                        <div class="sp-slides">

                            <div class="sp-slide">
                                <img alt="Image" class="sp-image" src="css/images/blank.gif" data-src="img/slider_single_tour/1_medium.jpg" data-small="img/slider_single_tour/1_small.jpg" data-medium="img/slider_single_tour/1_medium.jpg" data-large="img/slider_single_tour/1_large.jpg" data-retina="img/slider_single_tour/1_large.jpg">
                            </div>
                            <div class="sp-slide">
                                <img alt="Image" class="sp-image" src="css/images/blank.gif" data-src="img/slider_single_tour/2_medium.jpg" data-small="img/slider_single_tour/2_small.jpg" data-medium="img/slider_single_tour/2_medium.jpg" data-large="img/slider_single_tour/2_large.jpg" data-retina="img/slider_single_tour/2_large.jpg">
                            </div>

                            <div class="sp-slide">
                                <img alt="Image" class="sp-image" src="css/images/blank.gif" data-src="img/slider_single_tour/3_medium.jpg" data-small="img/slider_single_tour/3_small.jpg" data-medium="img/slider_single_tour/3_medium.jpg" data-large="img/slider_single_tour/3_large.jpg" data-retina="img/slider_single_tour/3_large.jpg">
                            </div>

                            <div class="sp-slide">
                                <img alt="Image" class="sp-image" src="css/images/blank.gif" data-src="img/slider_single_tour/4_medium.jpg" data-small="img/slider_single_tour/4_small.jpg" data-medium="img/slider_single_tour/4_medium.jpg" data-large="img/slider_single_tour/4_large.jpg" data-retina="img/slider_single_tour/4_large.jpg">
                            </div>

                            <div class="sp-slide">
                                <img alt="Image" class="sp-image" src="css/images/blank.gif" data-src="img/slider_single_tour/5_medium.jpg" data-small="img/slider_single_tour/5_small.jpg" data-medium="img/slider_single_tour/5_medium.jpg" data-large="img/slider_single_tour/5_large.jpg" data-retina="img/slider_single_tour/5_large.jpg">
                            </div>

                            <div class="sp-slide">
                                <img alt="Image" class="sp-image" src="css/images/blank.gif" data-src="img/slider_single_tour/6_medium.jpg" data-small="img/slider_single_tour/6_small.jpg" data-medium="img/slider_single_tour/6_medium.jpg" data-large="img/slider_single_tour/6_large.jpg" data-retina="img/slider_single_tour/6_large.jpg">
                            </div>

                            <div class="sp-slide">
                                <img alt="Image" class="sp-image" src="css/images/blank.gif" data-src="img/slider_single_tour/7_medium.jpg" data-small="img/slider_single_tour/7_small.jpg" data-medium="img/slider_single_tour/7_medium.jpg" data-large="img/slider_single_tour/7_large.jpg" data-retina="img/slider_single_tour/7_large.jpg">
                            </div>

                            <div class="sp-slide">
                                <img alt="Image" class="sp-image" src="css/images/blank.gif" data-src="img/slider_single_tour/8_medium.jpg" data-small="img/slider_single_tour/8_small.jpg" data-medium="img/slider_single_tour/8_medium.jpg" data-large="img/slider_single_tour/8_large.jpg" data-retina="img/slider_single_tour/8_large.jpg">
                            </div>

                            <div class="sp-slide">
                                <img alt="Image" class="sp-image" src="css/images/blank.gif" data-src="img/slider_single_tour/9_medium.jpg" data-small="img/slider_single_tour/9_small.jpg" data-medium="img/slider_single_tour/9_medium.jpg" data-large="img/slider_single_tour/9_large.jpg" data-retina="img/slider_single_tour/9_large.jpg">
                            </div>
                        </div>
                        <div class="sp-thumbnails">
                            <img alt="Image" class="sp-thumbnail" src="img/slider_single_tour/1_medium.jpg">
                            <img alt="Image" class="sp-thumbnail" src="img/slider_single_tour/2_medium.jpg">
                            <img alt="Image" class="sp-thumbnail" src="img/slider_single_tour/3_medium.jpg">
                            <img alt="Image" class="sp-thumbnail" src="img/slider_single_tour/4_medium.jpg">
                            <img alt="Image" class="sp-thumbnail" src="img/slider_single_tour/5_medium.jpg">
                            <img alt="Image" class="sp-thumbnail" src="img/slider_single_tour/6_medium.jpg">
                            <img alt="Image" class="sp-thumbnail" src="img/slider_single_tour/7_medium.jpg">
                            <img alt="Image" class="sp-thumbnail" src="img/slider_single_tour/8_medium.jpg">
                            <img alt="Image" class="sp-thumbnail" src="img/slider_single_tour/9_medium.jpg">
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-3">
                            <h3>Description</h3>
                        </div>
                        <div class="col-lg-9">
                            <p>
                                The rooms at the Panoramic Hotel are new, well-lit and inviting. Our reception staff will be happy to help you during your stay in Taormina, suggesting itineraries, guided visits and some good restaurants in the historic centre.
                            </p>
                            <h4>Hotel facilities</h4>
                            <p>
                                The rooms at the Panoramic Hotel are new, well-lit and inviting.
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list_ok">
                                        <li>Charming Meadows.</li>
                                        <li>Original landscape.</li>
                                        <li>Snow-covered peak.</li>
                                        <li>Transparent blue water is making noise</li>
                                        <li>Lush green valleys and many delightful sceneries.</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list_ok">
                                        <li>High Mountains</li>
                                        <li>Booking</li>
                                        <li>Charming Meadows.</li>
                                        <li>Hotel Booking</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End row  -->
                        </div>
                        <!-- End col-md-9  -->
                    </div>
                    <!-- End row  -->

                    <hr>

                    <div class="row">
                        <div class="col-lg-3">
                            <h3>Rooms Types</h3>
                        </div>
                        <div class="col-lg-9">
                            <h4>Single Room</h4>
                            <p>
                                The rooms at the Panoramic Hotel are new, well-lit and inviting. Our reception staff will be happy to help you during your stay in Taormina, suggesting itineraries, guided visits and some good restaurants in the historic centre.
                            </p>

                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list_icons">
                                        <li><i class="icon_set_1_icon-86"></i> Free wifi</li>
                                        <li><i class="icon_set_2_icon-116"></i> Plasma Tv</li>
                                        <li><i class="icon_set_2_icon-106"></i> Safety box</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list_ok">
                                        <li>Tour Guide</li>
                                        <li>Luxury Car</li>
                                        <li>Hotel Booking</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End row  -->
                            <div class="owl-carousel owl-theme carousel-thumbs-2 magnific-gallery">
                                <div class="item">
                                    <a href="img/carousel/1.jpg" data-effect="mfp-zoom-in"><img src="img/carousel/1.jpg" alt="Image">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="img/carousel/2.jpg" data-effect="mfp-zoom-in"><img src="img/carousel/2.jpg" alt="Image">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="img/carousel/3.jpg" data-effect="mfp-zoom-in"><img src="img/carousel/3.jpg" alt="Image">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="img/carousel/4.jpg" data-effect="mfp-zoom-in"><img src="img/carousel/4.jpg" alt="Image">
                                    </a>
                                </div>
                            </div>
                            <!-- End photo carousel  -->

                            <hr>

                            <h4>Double Room</h4>
                            <p>
                                The rooms at the Panoramic Hotel are new, well-lit and inviting.
                            </p>

                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list_icons">
                                        <li><i class="icon_set_1_icon-86"></i> Free wifi</li>
                                        <li><i class="icon_set_2_icon-116"></i> Plasma Tv</li>
                                        <li><i class="icon_set_2_icon-106"></i> Safety box</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list_ok">
                                        <li>Tour Guide</li>
                                        <li>Luxury Car</li>
                                        <li>Hotel Booking</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End row  -->
                            <div class="owl-carousel owl-theme carousel-thumbs-2 magnific-gallery">
                                <div class="item">
                                    <a href="img/carousel/1.jpg" data-effect="mfp-zoom-in"><img src="img/carousel/1.jpg" alt="Image">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="img/carousel/2.jpg" data-effect="mfp-zoom-in"><img src="img/carousel/2.jpg" alt="Image">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="img/carousel/3.jpg" data-effect="mfp-zoom-in"><img src="img/carousel/3.jpg" alt="Image">
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="img/carousel/4.jpg" data-effect="mfp-zoom-in"><img src="img/carousel/4.jpg" alt="Image">
                                    </a>
                                </div>
                            </div>
                            <!-- End photo carousel  -->
                        </div>
                        <!-- End col-md-9  -->
                    </div>
                    <!-- End row  -->

                    <hr>


                </div>
                <!--End  single_tour_desc-->

                <aside class="col-lg-4">
                    <p class="d-none d-xl-block d-lg-block d-xl-none">
                        <a class="btn_map" data-toggle="collapse" href="#collapseMap" aria-expanded="false" aria-controls="collapseMap" data-text-swap="Hide map" data-text-original="View on map">View on map</a>
                    </p>
                    <div class="box_style_1 expose">
                        <h3 class="inner">Check Availability</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><i class="icon-calendar-7"></i> Check in</label>
                                    <input class="date-pick form-control" data-date-format="M d, D" type="text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label><i class="icon-calendar-7"></i> Check out</label>
                                    <input class="date-pick form-control" data-date-format="M d, D" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Adults</label>
                                    <div class="numbers-row">
                                        <input type="text" value="1" id="adults" class="qty2 form-control" name="quantity">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Children</label>
                                    <div class="numbers-row">
                                        <input type="text" value="0" id="children" class="qty2 form-control" name="quantity">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div id="abc">
                            <!-- Popup Div Starts Here -->
                            <div id="popupContact">
                                <h2>Booking Successful </h2>
                            </div>
                            <!-- Popup Div Ends Here -->
                        </div>
                        <!-- Display Popup Button -->
                        <button  class="btn_full" id="popup" onclick="div_show()">Check Now</button>
                        <a class="btn_full_outline" href="#"><i class=" icon-heart"></i> Add to whislist</a>
                    </div>
                    <!--/box_style_1 -->

                    <div class="box_style_4">
                        <i class="icon_set_1_icon-90"></i>
                        <h4><span>Book</span> by phone</h4>
                        <a href="tel://004542344599" class="phone">+92 3876475773</a>
                        <small>Monday to Friday 9.00am - 7.30pm</small>
                    </div>

                    <div class="box_style_4">
                        <h4>How would you like to rate us </h4>
                        <div class="rating">
                            <input type="radio" name="rating" value="5" id="15"><label for="15">☆</label>
                            <input type="radio" name="rating" value="4" id="14"><label for="14">☆</label>
                            <input type="radio" name="rating" value="3" id="13"><label for="13">☆</label>
                            <input type="radio" name="rating" value="2" id="12"><label for="12">☆</label>
                            <input type="radio" name="rating" value="1" id="11"><label for="11">☆</label>
                        </div>

                        <input type="text" class="form-control" Placeholder="Leave us a review" name="review" />
                        <br>

                        <a class="btn_full" href="#">Save Review</a>
                    </div>
                </aside>
            </div>
            <!--End row -->
        </div>
        <!--End container -->

        <div id="overlay"></div>
        <!-- Mask on input focus -->

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

    <!-- Modal Review -->
    <div class="modal fade" id="myReview" tabindex="-1" role="dialog" aria-labelledby="myReviewLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myReviewLabel">Write your review</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div id="message-review">
                    </div>
                    <form method="post" action="assets/review_hotel.php" name="review_hotel" id="review_hotel">
                        <input name="hotel_name" id="hotel_name" type="hidden" value="Mariott Hotel Paris">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="name_review" id="name_review" type="text" placeholder="Your name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="lastname_review" id="lastname_review" type="text" placeholder="Your last name" class="form-control">
                                </div>
                            </div>
                        </div>
                        <!-- End row -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="email_review" id="email_review" type="email" placeholder="Your email" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control" name="room_type_review" id="room_type_review">
                                        <option value="">Select room type</option>
                                        <option value="Single room">Single Room</option>
                                        <option value="Double Room">Double Room</option>
                                        <option value="King double room">King Double Room</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- End row -->
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Cleanliness</label>
                                    <select class="form-control" name="cleanliness_review" id="cleanliness_review">
                                        <option value="">Please review</option>
                                        <option value="Low">Low</option>
                                        <option value="Sufficient">Sufficient</option>
                                        <option value="Good">Good</option>
                                        <option value="Excellent">Excellent</option>
                                        <option value="Superb">Super</option>
                                        <option value="Not rated">I don't know</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Comfort</label>
                                    <select class="form-control" name="comfort_review" id="comfort_review">
                                        <option value="">Please review</option>
                                        <option value="Low">Low</option>
                                        <option value="Sufficient">Sufficient</option>
                                        <option value="Good">Good</option>
                                        <option value="Excellent">Excellent</option>
                                        <option value="Superb">Super</option>
                                        <option value="Not rated">I don't know</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- End row -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Price</label>
                                    <select class="form-control" name="price_review" id="price_review">
                                        <option value="">Please review</option>
                                        <option value="Low">Low</option>
                                        <option value="Sufficient">Sufficient</option>
                                        <option value="Good">Good</option>
                                        <option value="Excellent">Excellent</option>
                                        <option value="Superb">Super</option>
                                        <option value="Not rated">I don't know</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Quality</label>
                                    <select class="form-control" name="quality_review" id="quality_review">
                                        <option value="">Please review</option>
                                        <option value="Low">Low</option>
                                        <option value="Sufficient">Sufficient</option>
                                        <option value="Good">Good</option>
                                        <option value="Excellent">Excellent</option>
                                        <option value="Superb">Super</option>
                                        <option value="Not rated">I don't know</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- End row -->
                        <div class="form-group">
                            <textarea name="review_text" id="review_text" class="form-control" style="height:100px" placeholder="Write your review"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" id="verify_review" class=" form-control" placeholder="Are you human? 3 + 1 =">
                        </div>
                        <input type="submit" value="Submit" class="btn_1" id="submit-review">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal review -->


@endsection
