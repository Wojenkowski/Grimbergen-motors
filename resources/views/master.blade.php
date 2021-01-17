<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-180268137-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-180268137-1');
    </script>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=2.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#4285f4">

    @yield("title&meta")
    <meta content="car,Best auto repair, auto shop, car mechanic, automobile, Best care repair" name="keywords">

    <!-- rest css -->
    <link  rel="stylesheet" type="text/css" href="{{asset('/css/resetCompressed.css')}}" />

    <!-- Favicons
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">-->
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('apple-touch-icon-120x120-precomposed.png')}}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('apple-touch-icon-152x152-precomposed.png')}}" />
    <link  rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.ico')}}"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link  rel="stylesheet" type="text/css" href="{{asset('/vendor/bootstrap/css/bootstrap.min.css')}}" />
    <link  rel="stylesheet" type="text/css" href="{{asset('/vendor/icofont/icofont.min.css')}}" />
    <link  rel="stylesheet" type="text/css" href="{{asset('/vendor/boxicons/css/boxicons.min.css')}}" />
    <link  rel="stylesheet" type="text/css" href="{{asset('/vendor/owl.carousel/assets/owl.carousel.min.css')}}" />
    <link  rel="stylesheet" type="text/css" href="{{asset('/vendor/vendor/venobox/venobox.css')}}" />

    <!-- Template Main CSS File -->
    <link  rel="stylesheet" type="text/css" href="{{asset('/css/style22.css')}}" />

    <!-- =======================================================
    * Template Name: Baker - v2.1.0
    * Template URL: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center">

        <!--<h1 class="logo mr-auto"><a href="index.html">Grimbergen motors</a></h1>-->
        <a class="mr-auto"><img src="{{asset('/images/halfLogoNotCompressed100x145-min.png')}}" title="Grimbergen motors logo" alt="Grimbergen motors logo" class="img-fluid"></a>

        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="/public/#hero">{{__("messages.home")}}</a></li>
                <li><a href="/public/#about">{{__("messages.aboutNav")}}</a></li>
                <li><a href="/public/#services">{{__("messages.diensten")}}</a></li>
                <!--<li><a href="#portfolio">Portfolio</a></li>-->
                <!--
                <li><a href="#team">Team</a></li>
                <li><a href="#pricing">Pricing</a></li>
                -->
                <li><a href="index#contact">Contact</a>
                <li class="drop-down"><a href="/public/merken">{{__("messages.merken")}}</a>
                    <ul>
                        <li><a href="/public/merken">{{__("messages.allemerken")}}</a></li>
                        <li class="drop-down"><a href="/public/dfsk">DFSK</a>
                            <ul>
                                <li><a href="/public/dfsk">{{__("messages.model")}}</a></li>
                            </ul>
                        <li class="drop-down"><a href="/public/baic">BAIC</a>
                            <ul>
                                <li><a href="/public/baic">{{__("messages.model")}}</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="drop-down"><a>{{__("messages.language")}}</a>
                    <ul>
                        <li><a href="{{ url('locale/nl') }}">NL</a></li>
                        <li><a href="{{ url('locale/en') }}">EN</a></li>
                        <li><a href="{{ url('locale/fr') }}">FR</a></li>
                    </ul>
                </li>

            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->
@yield("hero")
<main id="main">

    @yield("main")

</main>

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>Grimbergen motors</h3>
                    <p>
                        Sint-Amandsstraat 54-56,  <br>
                        1853 Stroombeek-Bever<br>
                        Belgium <br><br>
                        <strong>Phone:</strong> 02 267 19 51<br>
                        <strong>Email:</strong> info@grimbergenmotors.be<br>
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="/public/#hero">{{__("messages.home")}}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="/public/#services">{{__("messages.diensten")}}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="corona">corona</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="{{asset('/Files/Algemene%20voorwaarden%20voor%20verkopen%20en%20herstellingen.pdf')}}">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="https://www.privacypolicies.com/privacy/view/61460f60c916824f9a8e778c145c6875">Privacy policy</a></li>
                    </ul>
                </div>
            <!--
                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>{{__("messages.diensten")}}</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Text</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Text</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Text</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Text</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Text</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Join Our Newsletter</h4>
                    <p>text</p>
                    <form action="" method="post">
                        @csrf
                <label class="email-label" for="email"></label>
                <input id="email" type="email" name="email"><input type="submit" value="Subscribe">
            </form>
        </div>
-->
            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="mr-md-auto text-center text-md-left">
            <div class="copyright">
                &copy; Copyright <strong><span>Grimbergen motors</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/ -->
                <p>Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> and Grimbergen motors </p>
            </div>
        </div>
        <!--
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>-->
    </div>
</footer><!-- End Footer -->

<a href="#hero" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

<!-- Vendor JS Files -->
<script  src="{{asset('/vendor/jquery/jquery.min.js')}}"> </script>
<script  src="{{asset('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"> </script>
<script  src="{{asset('/vendor/jquery.easing/jquery.easing.min.js')}}"> </script>
<script  src="{{asset('/vendor/waypoints/jquery.waypoints.min.js')}}"> </script>
<script  src="{{asset('/vendor/counterup/counterup.min.js')}}"> </script>
<script  src="{{asset('/vendor/owl.carousel/owl.carousel.min.js')}}"> </script>
<script  src="{{asset('/vendor/isotope-layout/isotope.pkgd.min.js')}}"> </script>
<script  src="{{asset('/vendor/venobox/venobox.min.js')}}"> </script>

<!-- Template Main JS File -->

<script  type="text/javascript" src="{{asset('/js/main.js')}}"> </script>

</body>

</html>
