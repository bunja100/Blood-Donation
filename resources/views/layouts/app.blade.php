<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- css -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet"
          media="screen">
    <link href="{{asset('/frontend/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('/frontend/color/default.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('/frontend/css/style.css')}}" rel="stylesheet" media="screen">


    <!-- =======================================================
      Theme Name: Alstar
      Theme URL: https://bootstrapmade.com/alstar-free-parallax-bootstrap-template/
      Author: BootstrapMade.com
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>
<body>
<div id="app">
    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle nav</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Logo text or image -->
                <a class="navbar-brand" href="{{url('/')}}">Blood Donation</a>

            </div>
            <div class="navigation collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class="current"><a href="#intro">Home</a></li>
                    <li><a href="#about">Why Donate</a></li>
                    <li><a href="#portfolio">Eligibilty</a></li>
                    <li><a href="#services">Testimonials</a></li>
                    @auth()
                        <li><a href="{{url('donate')}}">Donors</a></li>
                    @endauth
                <!-- <li><a href="#team">Team</a></li> -->
                    <!-- <li><a href="#contact">Write your testimonial</a></li> -->
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false" aria-haspopup="true" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li><a href="">register</a></li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-patient').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
                {{--<li><a href="#myModal" data-toggle="modal">register</a></li>--}}
                </ul>
            </div>
        </div>
    </nav>
@yield('content')



<!-- Bottom widget -->
    <section id="bottom-widget" class="home-section bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact-widget wow bounceInLeft">
                        <i class="fa fa-map-marker fa-4x"></i>
                        <h5>Main Office</h5>
                        <p>
                            High Street,<br/>The Gambia
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-widget wow bounceInUp">
                        <i class="fa fa-phone fa-4x"></i>
                        <h5>Call</h5>
                        <p>
                            +1 111 9998 7774<br> +1 245 4544 6855

                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-widget wow bounceInRight">
                        <i class="fa fa-envelope fa-4x"></i>
                        <h5>Email us</h5>
                        <p>
                            hello@flextech.com<br/>sales@flextech.com
                        </p>
                    </div>
                </div>
            </div>
            <div class="row mar-top30">
                <div class="col-md-12">
                    <h5>We're on social networks</h5>
                    <ul class="social-network">
                        <li><a href="#">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-facebook fa-stack-1x fa-inverse"
                               style="background-color: blue; color: white"></i>
						</span></a>
                        </li>
                        <li><a href="#">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-dribbble fa-stack-1x fa-inverse"
                               style="background-color: #000; color: white""></i>
						</span></a>
                        </li>
                        <li><a href="#">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-twitter fa-stack-1x fa-inverse"
                               style="background-color: cyan; color: white"></i>
						</span></a>
                        </li>
                        <li><a href="#">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-pinterest fa-stack-1x fa-inverse"
                               style="background-color: pink; color: white"></i>
						</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Copyright &copy; UTG/ITC Students. All rights reserved.</p>
                    <div class="credits">
                        <!--
                          All the links in the footer should remain intact.
                          You can delete the links only if you purchased the pro version.
                          Licensing information: https://bootstrapmade.com/license/
                          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Alstar
                        -->
                        Designed by <a href="https://bootstrapmade.com/">Tech Ladies</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- js -->
    <script src="{{ asset('/frontend/js/jquery.js')}}"></script>
    <script src="{{asset('/frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/frontend/js/wow.min.js')}}"></script>
    <script src="{{asset('/frontend/js/mb.bgndGallery.js')}}"></script>
    <script src="{{asset('/frontend/js/mb.bgndGallery.effects.js')}}"></script>
    <script src="{{asset('/frontend/js/jquery.simple-text-rotator.min.js')}}"></script>
    <script src="{{asset('/frontend/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('/frontend/js/jquery.nav.js')}}"></script>
    <script src="{{asset('/frontend/js/modernizr.custom.js')}}"></script>
    <script src="{{asset('/frontend/js/grid.js')}}"></script>
    <script src="{{asset('/frontend/js/stellar.js')}}"></script>
    <!-- Contact Form JavaScript File -->
    <script src="{{asset('/frontend/contactform/contactform.js')}}"></script>

    <!-- Template Custom Javascript File -->
    <script src="{{asset('frontend/js/custom.js')}}"></script>
</div>


<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
