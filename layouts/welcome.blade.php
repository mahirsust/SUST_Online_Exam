<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="shortcut icon" type="image/png" href="university-cap.ico">
        <title>SUST Online Exam</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="homepage/css/bootstrap.min.css">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="homepage/css/ionicons.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="homepage/css/animate.css">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="homepage/css/slider.css">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="homepage/css/owl.carousel.css">
        <link rel="stylesheet" href="homepage/css/owl.theme.css">
        <link rel="stylesheet" href="homepage/css/jquery.fancybox.css">
        <!-- template main css file -->
        <link rel="stylesheet" href="homepage/css/main.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="homepage/css/responsive.css">

    </head>
    <body>
        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="{{ url('/') }}">
                            <!-- <img src="homepage/images/logo.png" alt="">
                        </a> -->

                <span style="color: #000;font-size: 40px;" >SUST</span>
                <span style="color: red;font-size: 40px;" >OnliNE</span>
                <span style="color:blue;font-size:15px;">
                Exam
                </span>
                </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="{{ url('/home') }}" >Home</a>
                            </li>
                            <li><a href="{{ url('/about') }}">About</a></li>
                            <li><a href="{{ url('/feature') }}">Features</a></li>
                            <!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="{{ url('/pages_error') }}">404 Page</a></li>
                                        <li><a href="{{ url('/pages_gallery') }}">Gallery</a></li>
                                    </ul>
                                </div>
                            </li> -->

                            <li><a href="{{ url('/contact') }}">Contact</a></li>

                            <!-- <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="blog-fullwidth.html">Blog Full</a></li>
                                        <li><a href="blog-left-sidebar.html">Blog Left sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog Right sidebar</a></li>
                                    </ul>
                                </div>
                            </li> -->
                            <li><a href="{{ url('/home') }}">Login</a></li>
                            <li><a href="{{ url('/home') }}">Register</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>
        
        
        @yield('content')


        <!--
        ==================================================
        Call To Action Section Start
        ================================================== -->
        <section id="call-to-action">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">SO WHAT YOU THINK ?</h1>
                            <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis,</br>possimus commodi, fugiat magnam temporibus vero magni recusandae? Dolore, maxime praesentium.</p>
                            <a href="{{ url('/contact') }}" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact With Me</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

         <!--
            ==================================================
            Footer Section Start
            ================================================== -->
            <footer id="footer">
                <div class="container">
                    <div class="col-md-8">
                        <p class="copyright">Copyright: <span>2015</span> . Design and Developed by <a href="http://www.Themefisher.com">Themefisher</a></p>
                    </div>
                    <div class="col-md-4">
                        <!-- Social Media -->
                        <ul class="social">
                            <li>
                                <a href="http://wwww.fb.com/themefisher" class="Facebook">
                                    <i class="ion-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://wwww.twitter.com/themefisher" class="Twitter">
                                    <i class="ion-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="Linkedin">
                                    <i class="ion-social-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://wwww.fb.com/themefisher" class="Google Plus">
                                    <i class="ion-social-googleplus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer> <!-- /#footer -->

            <!-- Template Javascript Files
        ================================================== -->
        <!-- modernizr js -->
        <script src="homepage/js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- jquery -->
        <script src="homepage/js/jquery.min.js"></script>
        <!-- owl carouserl js -->
        <script src="homepage/js/owl.carousel.min.js"></script>
        <!-- bootstrap js -->

        <script src="homepage/js/bootstrap.min.js"></script>
        <!-- wow js -->
        <script src="homepage/js/wow.min.js"></script>
        <!-- slider js -->
        <script src="homepage/js/slider.js"></script>
        <script src="homepage/js/jquery.fancybox.js"></script>
        <!-- template main js -->
        <script src="homepage/js/main.js"></script>
                
        </body>
    </html>