@extends('layouts.frontend')
@section('nav','fixed-top')
@section('content')
    <section class="parallax-window" data-parallax="scroll" data-image-src="img/slide_hero.jpg" data-natural-width="1400" data-natural-height="470">
        <div class="parallax-content-1">
            <div class="animated fadeInDown">
                <h1>Tour Blog</h1>
                <p>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</p>
            </div>
        </div>
    </section>
    <!-- End section -->

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
        <!-- End position -->

        <div class="container margin_60">
            <div class="row">
                <aside class="col-lg-3 add_bottom_30">

                    <div class="widget">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
						<button class="btn btn-default" type="button" style="margin-left:0;"><i class="icon-search"></i></button>
						</span>
                        </div>
                        <!-- /input-group -->
                    </div>
                    <!-- End Search -->

                    <hr>

                    <hr>

                    <!-- End widget -->
                    <div class="box_style_cat">
                        <ul id="cat_nav">
                            <li><a href="#" id="active"><i class="icon_set_1_icon-51"></i>categories</a>
                            </li>
                            <li><a href="#"><i class="icon_set_1_icon-3"></i>Places to visit</a>
                            </li>
                            <li><a href="#"><i class="icon_set_1_icon-4"></i>Top tours</a>
                            </li>
                            <li><a href="#"><i class="icon_set_1_icon-44"></i>Tips for travellers</a>
                            </li>
                            <li><a href="#"><i class="icon_set_1_icon-37"></i>Walking tours <span>(11)</span></a>
                            </li>
                        </ul>
                    </div>

                    <div class="widget">
                        <h4>Recent post</h4>
                        <ul class="recent_post">
                            <li>
                                <i class="icon-calendar-empty"></i> 16th July, 2020
                                <div><a href="#">It is a long established fact that a reader will be distracted </a>
                                </div>
                            </li>
                            <li>
                                <i class="icon-calendar-empty"></i> 16th July, 2020
                                <div><a href="#">It is a long established fact that a reader will be distracted </a>
                                </div>
                            </li>
                            <li>
                                <i class="icon-calendar-empty"></i> 16th July, 2020
                                <div><a href="#">It is a long established fact that a reader will be distracted </a>
                                </div>
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
                                <h6>Tags</h6>
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
                <!-- End aside -->

                <div class="col-lg-9">
                    <div class="box_style_1">
                        <div class="post">
                            <a href="blog_post.html" title="blog_post.html"><img src="img/slide_hero.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="post_info clearfix clearfix1">
                                <div class="post-left">
                                    <ul>
                                        <li><i class="icon-calendar-empty"></i> On <span>12 Nov 2020</span>
                                        </li>
                                        <li><i class="icon-inbox-alt"></i> In <a href="#">Top tours</a>
                                        </li>
                                        <li><i class="icon-tags"></i> Tags <a href="#">Works</a>, <a href="#">Personal</a>
                                        </li>
                                        <li><i class="icon-comment"></i><a href="#">25 </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <h2>Duis aute irure dolor in reprehenderit</h2>
                            <p>
                                Ludus albucius adversarium eam eu. Sit eu reque tation aliquip. Quo no dolorum albucius lucilius, hinc eligendi ut sed. Ex nam quot ferri suscipit, mea ne legere alterum repudiandae. Ei pri quaerendum intellegebat, ut vel consequuntur voluptatibus. Et volumus sententiae adversarium duo......
                            </p>
                            <p>
                                Ludus albucius adversarium eam eu. Sit eu reque tation aliquip. Quo no dolorum albucius lucilius, hinc eligendi ut sed. Ex nam quot ferri suscipit, mea ne legere alterum repudiandae. Ei pri quaerendum intellegebat, ut vel consequuntur voluptatibus. Et volumus sententiae adversarium duo......
                            </p>
                            <a href="blog_post.html" class="btn_1" title="blog_post.html">Read more</a>
                        </div>
                        <!-- end post -->

                        <hr>

                        <div class="post">
                            <a href="blog_post.html" title="blog_post.html"><img src="img/slide_hero.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="post_info clearfix clearfix1">
                                <div class="post-left">
                                    <ul>
                                        <li><i class="icon-calendar-empty"></i> On <span>12 Nov 2020</span>
                                        </li>
                                        <li><i class="icon-inbox-alt"></i> In <a href="#">Top tours</a>
                                        </li>
                                        <li><i class="icon-tags"></i> Tags <a href="#">Works</a>, <a href="#">Personal</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="post-right"><i class="icon-comment"></i><a href="#">25 </a>Comments</div>
                            </div>
                            <h2>Duis aute irure dolor in reprehenderit</h2>
                            <p>
                                Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem.....
                            </p>
                            <a href="blog_post.html" class=" btn_1">Read more</a>
                        </div>
                        <!-- end post -->

                        <hr>

                        <div class="post">
                            <a href="blog_post.html" title="blog_post.html"><img src="img/slide_hero.jpg" alt="Image" class="img-fluid">
                            </a>
                            <div class="post_info clearfix clearfix1">
                                <div class="post-left">
                                    <ul>
                                        <li><i class="icon-calendar-empty"></i> On <span>12 Nov 2020</span>
                                        </li>
                                        <li><i class="icon-inbox-alt"></i> In <a href="#">Top tours</a>
                                        </li>
                                        <li><i class="icon-tags"></i> Tags <a href="#">Works</a>, <a href="#">Personal</a>
                                        </li>
                                        <li><i class="icon-comment"></i><a href="#">25 </a>Comments
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <h2>Duis aute irure dolor in reprehenderit</h2>
                            <p>
                                Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem.....
                            </p>
                            <p>
                                Ludus albucius adversarium eam eu. Sit eu reque tation aliquip. Quo no dolorum albucius lucilius, hinc eligendi ut sed. Ex nam quot ferri suscipit, mea ne legere alterum repudiandae. Ei pri quaerendum intellegebat, ut vel consequuntur voluptatibus. Et volumus sententiae adversarium duo......
                            </p>
                            <a href="blog_post.html" class="btn_1" title="blog_post.html">Read more</a>
                        </div>
                        <!-- end post -->
                    </div>
                    <!-- end box style -->
                    <hr>

                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><span class="page-link">1<span class="sr-only">(current)</span></span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- end pagination-->

                </div>
                <!-- End col-md-9-->
            </div>
            <!-- End row-->
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
