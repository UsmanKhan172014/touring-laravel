@extends('layouts.app')
@section('nav','fixed-top')
@section('content')
    <div class="landing">
        <div class="home-wrap">
            <div class="home-inner" style="background-image: url('{{asset('img/bg_1.jpg')}}')">
            </div>
        </div>
    </div>
    <div class="caption text-center">
        <h1>Welcome To TravelHolic</h1>
        <h3>Book Your Tour With Us</h3>
        <a class="btn btn-outline-light btn-lg" href="#course">Book Tours</a>
    </div>
    <!--- Start Courese Section -->
    <div>
        <div class="col-12 narrow text-center">
            <h1>Nuno Theme Advance Bootstrap Course</h1>
            <p class="lead">This is dummy data.This is dummy data.This is dummy data.This is dummy data.This is dummy data.This is dummy data.</p>
            <a class="btn btn-secondary btn-md" href="#" target="_blank">Bootstrap Course</a>
        </div>
    </div>
    <!--- Start Course Section -->
    <div  class="col-md-12" style="padding: 0; padding-top: 15px">
        <div  class="card" style="margin-left: 0">

            <div class="card-body">
                <h3 class="heading" style="text-align: center">Rooms</h3>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="card col-md-3 " style="margin-left: 3.5rem">
                                    <div class="card-header" style="background-color: grey;">
                                        <strong class="card-title">Room 1</strong>

                                    </div>
                                    <div class="card-body">
                                        <h1>sdafasdfasdf</h1>
                                    </div>
                                </div>

                                <div class="card col-md-3" style="margin-left: 3.5rem">
                                    <div class="card-header" style="background-color: grey;">
                                        <strong class="card-title">Room 2</strong>

                                    </div>
                                    <div class="card-body">
                                        <h1>sdafasdfasdf</h1>
                                    </div>
                                </div>

                                <div class="card col-md-3 " style="margin-left: 3.5rem">
                                    <div class="card-header" style="background-color: grey;">
                                        <strong class="card-title">Room 3</strong>

                                    </div>
                                    <div class="card-body">
                                        <h1>sdafasdfasdf</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="card col-md-3 " style="margin-left: 3.5rem">
                                    <div class="card-header" style="background-color: grey;">
                                        <strong class="card-title">Room 4</strong>

                                    </div>
                                    <div class="card-body">
                                        <h1>sdafasdfasdf</h1>
                                    </div>
                                </div>

                                <div class="card col-md-3" style="margin-left: 3.5rem">
                                    <div class="card-header" style="background-color: grey;">
                                        <strong class="card-title">Room 5</strong>

                                    </div>
                                    <div class="card-body">
                                        <h1>sdafasdfasdf</h1>
                                    </div>
                                </div>

                                <div class="card col-md-3 " style="margin-left: 3.5rem">
                                    <div class="card-header" style="background-color: grey;">
                                        <strong class="card-title">Room 6</strong>

                                    </div>
                                    <div class="card-body">
                                        <h1>sdafasdfasdf</h1>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <i class="fa fa-chevron-circle-left fa-2x" aria-hidden="true" style="color: black"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <i class="fa fa-chevron-circle-right fa-2x" aria-hidden="true" style="color: black"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--- Start Features Section -->
    <div>
        <!--- Start Jumbotron Section -->
        <div class="jumbotron">
            <div class="narrow text-center">

                <div class="col-12">
                    <h3 class="heading">Features</h3>
                    <div class="heading-underline"></div>
                </div>

                <div class="row text-center">

                    <div class="col-md-4">
                        <div class="feature">
                            <i class="fas fa-play-circle fa-4x" data-fa-transform="shrink-3 up-5"></i>
                            <h3>Custom Animation</h3>
                            <p>This is dummy data.This is dummy data.This is dummy data.This is dummy data.This is dummy data.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="feature">
                            <i class="fas fa-sliders-h fa-4x" data-fa-transform="shrink-4.5 up-4.5"></i>
                            <h3>Content Slider</h3>
                            <p>This is dummy data.This is dummy data.This is dummy data.This is dummy data.This is dummy data.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="feature">
                            <i class="fab fa-wpforms fa-4x" data-fa-transform="shrink-4 up-5"></i>
                            <h3>Contact Form</h3>
                            <p>This is dummy data.This is dummy data.This is dummy data.This is dummy data.This is dummy data.</p>
                        </div>
                    </div>

                </div><!--- End Row Section -->

            </div><!--- End Narrow Section -->
        </div>
        <!--- End Jumbotron Section -->
    </div>
    <!--- End Features Section -->

    <!--- Start Resources Section -->
    <div >

        <div class="fixed-background">
            <div class="row dark text-center">
                <div class="col-12">
                    <h3 class="heading">Build With Care</h3>
                    <div class="heading-underline"></div>
                </div>

                <div class="col-md-4">
                    <h3>HTML 5</h3>
                    <div class="feature">
                        <i class="fas fa-code fa-3x"></i>
                    </div>
                    <p class="lead">This is dummy data.This is dummy data.This is dummy data.This is dummy data.</p>
                </div>

                <div class="col-md-4">
                    <h3>Bootstrap 4</h3>
                    <div class="feature">
                        <i class="fas fa-bold fa-3x"></i>
                    </div>
                    <p class="lead">This is dummy data.This is dummy data.This is dummy data.This is dummy data.</p>
                </div>

                <div class="col-md-4">
                    <h3>CSS 3</h3>
                    <div class="feature">
                        <i class="fab fa-css3 fa-3x"></i>
                    </div>
                    <p class="lead">This is dummy data.This is dummy data.This is dummy data.This is dummy data.</p>
                </div>

            </div><!--- End Row Dark Section -->

            <div class="fixed-wrap">
                <div class="fixed" style="background-image: url('{{asset('img/apple.png')}}')">
                </div>
            </div>

        </div><!--- End Fixed Background Section -->

    </div>
    <!--- End Resources Section -->

    <!--- Start Clients Section -->
    <div>

        <!--- Start Jumbotron -->
        <div class="jumbotron">

            <div class="col-12 text-center">
                <h3 class="heading">Clients</h3>
                <div class="heading-underline"></div>
            </div>

            <div class="row">

                <div class="col-md-6 clients">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="img/client1.png">
                        </div>
                        <div class="col-md-8">
                            <blockquote>
                                <i class="fas fa-quote-left"></i>
                                This is dummy data.This is dummy data.This is dummy data.This is dummy data.This is dummy data.This is dummy data.This is dummy data.This is dummy data.This is dummy data.This is dummy data.This is dummy data.This is dummy data.
                                <hr class="clients-hr">
                                <cite>&#8212; Eric, Small Business Owner</cite>
                            </blockquote>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 clients">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="img/client2.png">
                        </div>
                        <div class="col-md-8">
                            <blockquote>
                                <i class="fas fa-quote-left"></i>
                                This is dummy data.This is dummy data.This is dummy data.This is dummy data.This is dummy data.This is dummy data.This is dummy data.This is dummy data.This is dummy data.This is dummy data.This is dummy data.This is dummy data.
                                <hr class="clients-hr">
                                <cite>&#8212; Rachel, Professional Photographer</cite>
                            </blockquote>
                        </div>
                    </div>
                </div>

            </div><!--- End Row -->

        </div><!--- End Jumbotron -->
        <div class="col-12 narrow text-center">
            <p class="lead">This is dummy data.This is dummy data.This is dummy data.This is dummy data.</p>
            <a class="btn btn-secondary btn-md" href="#" target="_blank">Bootstrap Course</a>
        </div>
    </div>

@endsection
