<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Cheta Nwatarali">
    <title>
    @section('full_title')
    @yield('title', 'Basic Page') | GOU Course Evaluation
    @show
    </title>

    @section('styles')
    <!-- Global Stylesheets -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/selectize.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/vanillabox/vanillabox.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">

    <style type="text/css">
    .input-group .form-control {
        z-index: inherit;
    }
    .page-sub-page .wrapper .primary-navigation-wrapper .navbar-brand:before, .page-homepage-courses .wrapper .primary-navigation-wrapper .navbar-brand:before, .page-homepage-events .wrapper .primary-navigation-wrapper .navbar-brand:before {
        height: 190px;
    }

    .navigation-wrapper .primary-navigation-wrapper header .navbar-brand:before {
        height: 190px;
    }
    .navigation-wrapper .primary-navigation-wrapper header .navbar-brand img {
        max-height: 120px;
    }
    .breadcrumb {
        margin-top: 80px;
    }
    @media (max-width: 767px) {
        .navigation-wrapper .primary-navigation-wrapper header .navbar-brand img {
            max-width: 45px;
            margin-left: 22px;
        }
    }
    </style>

    <!-- Page Stylesheets -->
    @show
    
</head>

    <body class="page-sub-page">
    <!-- Wrapper -->
    <div class="wrapper">
    <!-- Header -->
    <div class="navigation-wrapper">
        <div class="secondary-navigation-wrapper">
            <div class="container">
                <div class="navigation-contact pull-left">
                @if (Auth::check())
                    {{ Auth::user()->person->getFullName() }} <span class="opacity-70">{{ Auth::user()->person->registration_number }}</span>
                @else
                    Nwatarali Cheta Sidney  <span class="opacity-70">GOU/12/1443</span>
                @endif
                </div>
                <ul class="secondary-navigation list-unstyled pull-right">
                    @if(Auth::guest())
                    <li><a href="{{ url('register') }}">Register</a></li>
                    <li><a href="{{ url('login') }}">Log In</a></li>
                    @else
                    <li><a href="{{ url('home') }}">Profile</a></li>
                    <li><a href="{{ url('logout') }}">Log Out</a></li>
                    @endif
                </ul>
            </div>
        </div><!-- /.secondary-navigation -->
        <div class="primary-navigation-wrapper">
            <header class="navbar" id="top" role="banner">
                <div class="container">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-brand nav" id="brand">
                            <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" alt="brand"></a>
                        </div>
                    </div>
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="about-us.html">About</a>
                            </li>
                            <li>
                                <a href="#" class=" has-child no-link">Courses</a>
                                <ul class="list-unstyled child-navigation">
                                    <li><a href="course-detail-v1.html">CSC 458 - Queuing System</a></li>
                                    <li><a href="course-detail-v2.html">CSC 484 - Artificial Intelligence</a></li>
                                    <li><a href="course-detail-v3.html">CSC 488 - Expert System</a></li>
                                    <li><a href="course-listing.html">View All Courses</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="has-child no-link">Lecturers</a>
                                <ul class="list-unstyled child-navigation">
                                    <li><a href="course-detail-v1.html">Prof. GAM Ikekeonwu</a></li>
                                    <li><a href="course-detail-v2.html">Prof. F.S Bakpo</a></li>
                                    <li><a href="course-detail-v3.html">Engr. Chineke</a></li>
                                    <li><a href="course-listing.html">View All Lecturers</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact-us.html">Contact</a>
                            </li>
                        </ul>
                    </nav><!-- /.navbar collapse-->
                </div><!-- /.container -->
            </header><!-- /.navbar -->
        </div><!-- /.primary-navigation -->
        <div class="background">
            <img src="{{ asset('img/background-city.png') }}"  alt="background">
        </div>
    </div>
    <!-- end Header -->

    <!-- Breadcrumb -->
    @yield('breadcrumb')
    <!-- end Breadcrumb -->

    <!-- Page Content -->
    <div id="page-content">
    @yield('content')
    </div>
    <!-- end Page Content -->

    <!-- Footer -->
    <footer id="page-footer">
        <section id="footer-top">
            <div class="container">
                <div class="footer-inner">
                    <div class="footer-social">
                        <figure>Follow us:</figure>
                        <div class="icons">
                            <a href="https://www.facebook.com/gouniversityenugu" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-youtube-play"></i></a>
                        </div><!-- /.icons -->
                    </div><!-- /.social -->
                    <div class="search pull-right">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                        </span>
                        </div><!-- /input-group -->
                    </div><!-- /.pull-right -->
                </div><!-- /.footer-inner -->
            </div><!-- /.container -->
        </section><!-- /#footer-top -->

        <section id="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <aside class="logo">
                            <img src="{{ asset('img/logo.png') }}" class="vertical-center">
                        </aside>
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-4">
                        <aside>
                            <header><h4>Contact</h4></header>
                            <address>
                                <strong>Godfrey Okoye University</strong>
                                <br>
                                <span>Thinkers Corner Campus</span>
                                <br><br>
                                <span>Ugwuomu-Nike, Enugu State</span>
                                <br>
                                <span>Nigeria</span>
                                <br>
                                <abbr title="Telephone">Tel:</abbr> <a href="tel:+2348172672245">+234 817-267-2245</a>
                                <br>
                                <abbr title="Email">Email:</abbr> <a href="mailto:registrar@gouni.edu.ng">registrar@gouni.edu.ng</a>
                            </address>
                        </aside>
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-4">
                        <aside>
                            <header><h4>Quick Links</h4></header>
                            <ul class="list-links">
                                <li><a href="#">About This App</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                            </ul>
                        </aside>
                    </div><!-- /.col-md-3 -->
                    <div class="col-md-3 col-sm-4">
                        <aside>
                            <header><h4>About Godfrey Okoye University</h4></header>
                            <p>Godfrey Okoye University was founded in 2008 by Very Reverend
                            Father Professor Dr. Christian Aniekwe for the Catholic Diocese of Enugu.</p>

                            <p>The University comprises of four faculties: 
                            Faculty of Management and Social Sciences,
                            Faculty of Natural and Applied Sciences,
                            Faculty of Education, and 
                            Faculty of Arts.
                            </p>
                        </aside>
                    </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
            <div class="background"><img src="{{ asset('img/background-city.png') }}" class="" alt=""></div>
        </section><!-- /#footer-content -->

        <section id="footer-bottom">
            <div class="container">
                <div class="footer-inner">
                    <div class="copyright">&copy; {{ \Carbon\Carbon::now()->format('Y') }} <a href="http://gouni.edu.ng/" target="_blank">Godfrey Okoye University</a>. All rights reserved.</div><!-- /.copyright -->
                </div><!-- /.footer-inner -->
            </div><!-- /.container -->
        </section><!-- /#footer-bottom -->

    </footer>
    <!-- end Footer -->

    </div>
    <!-- end Wrapper -->


    <!-- Global scripts -->
    @section('scripts')
    <script type="text/javascript" src="{{ asset('js/jquery-2.1.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/selectize.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.placeholder.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jQuery.equalHeights.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/icheck.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.vanillabox-0.1.5.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.tablesorter.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/retina-1.1.0.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>

    <!-- Page scripts -->
    @show

    </body>
</html>