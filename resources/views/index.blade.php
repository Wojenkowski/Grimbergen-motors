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

    <meta name="description" content="{{__("messages.descriptionHome")}}">
    <title>Grimbergen motors {{__("messages.diensten")}}</title>
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
    <link  rel="stylesheet" type="text/css" href="{{asset('/vendor/venobox/venobox.css')}}" />

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
        <a href="/" class="mr-auto"><img  width="25%" height="auto" src="{{asset('/images/halfLogoNotCompressed.png')}}" title="Grimbergen motors logo" alt="Grimbergen motors logo" class="img-fluid"></a>

        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li><a href="#hero">{{__("messages.home")}}</a></li>
                <li><a href="#about">{{__("messages.aboutNav")}}</a></li>
                <li><a href="#services">{{__("messages.diensten")}}</a></li>
                <!--<li><a href="#portfolio">Portfolio</a</li>-->
                <!--
                <li><a href="#team">Team</a></li>
                <li><a href="#pricing">Pricing</a></li>
                -->
                <li><a href="#contact">Contact</a>
                <li class="drop-down"><a href="/merken">{{__("messages.merken")}}</a>
                    <ul>
                        <li><a href="/merken">{{__("messages.allemerken")}}</a></li>
                        <li class="drop-down"><a href="/dfsk">DFSK</a>
                            <ul>
                                <li><a href="/dfsk">{{__("messages.model")}}</a></li>
                            </ul>
                        <li class="drop-down"><a href="/baic">BAIC</a>
                            <ul>
                                <li><a href="/baic">{{__("messages.model")}}</a></li>
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

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center justify-content-center">
        <div class="container position-relative">
            <h1>{{__("messages.welcome")}}</h1>
            <h2>{{__("messages.missie")}}</h2>
            <a href="#about" class="btn-get-started scrollto">{{__("messages.getStated")}}</a>
        </div>
    </section><!-- End Hero -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row text-center">
                <div class="col-lg-6 ">
                    <img src="{{asset('/images/fullLogoNotCompressed.png')}}" title="Grimbergen motors logo" alt="Grimbergen motors logo" class="img-fluid w-50">
                </div>
                 <div class="col-lg-6 text-lg-left pt-4 pt-lg-0 ">
                     <h3>{{__("messages.about")}}</h3>
                     <div class="row">
                         <div class="col-md-6">
                         </div>
                         <div class="col-md-6">
                             <i class="bx bx-cube-alt"></i>
                             <h4>{{__("messages.past")}}</h4>
                             <p>{{__("messages.past1")}}</p>
                             <p>{{__("messages.past2")}}</p>
                             <a href="heden">{{__("messages.moreInfo")}} </a>
                         </div>
                     </div>
                 </div>
             </div>

         </div>
     </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="clients" class="clients">
        <h2>Partners</h2>
        <div class="container" data-aos="zoom-in">

            <div class="row d-flex align-items-center">

                <div class="col-6 d-flex align-items-center justify-content-center">
                    <a href="https://oneautomotive.be/onze-merken/baic/"><img src="{{asset('/images/Logo_Baic.png')}}" class="img-fluid" alt="baic" title="baic"></a>
                </div>

                <div class="col-6 d-flex align-items-center justify-content-center">
                    <a href="https://oneautomotive.be/onze-merken/dfsk/"><img src="{{asset('/images/Logo_DFSK.png')}}" class="img-fluid" alt="dfsk" title="dfsk"></a>
                </div>

            </div>
        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>{{__("messages.diensten")}}</h2>
                <p>{{__("messages.Hersteligen")}}</p>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6 align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-blue">
                        <div class="icon">
                            <i class="bx bx-repeat"></i>
                        </div>
                        <h3><span> {{__("messages.offerte")}}</span></h3>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box iconbox-orange ">
                        <div class="icon">
                            <i class="bx bx-layer"></i>
                        </div>
                        <h3><span>{{__("messages.airco")}} 80€</span></h3>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-pink">
                        <div class="icon">
                            <i class="bx bx-tachometer"></i>
                        </div>
                        <h3><span>{{__("messages.grootOnderhoud")}} 215€</span></h3>
                        <p>{{__("messages.kleinOnderhoud")}} 125€</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box iconbox-yellow">
                        <div class="icon">
                            <i class="bx bx-bullseye"></i>
                        </div>
                        <h3><span>{{__("messages.banden")}}</span></h3>
                    </div>
                </div>

                <div class="kamil col-lg-4 col-md-6 align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="kamil icon-box iconbox-red">
                        <div class="icon">
                            <i class="bx bx-slideshow"></i>
                        </div>
                        <h3><span>{{__("messages.Revisie")}} 55€</span></h3>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box iconbox-teal">
                        <div class="icon">
                            <i class="bx bx-car"></i>
                        </div>
                        <h3><span>{{__("messages.vervangwagen")}}</span></h3>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <!--
    <section id="cta" class="cta">
        <div class="container">

            <div class="text-center">
                <h3>Call To Action</h3>
                <p> text </p>
                <a class="cta-btn" href="#">Call To Action</a>
            </div>

        </div>
    </section>
    -->
    <!-- End Cta Section -->


    <!-- ======= Portfolio Section ======= -->
    <!--
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title">
                <h2>Portfolio</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-card">Card</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 1</h4>
                        <p>App</p>
                        <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox details-link" title="Portfolio Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox details-link" title="Portfolio Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 2</h4>
                        <p>App</p>
                        <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox details-link" title="Portfolio Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Card 2</h4>
                        <p>Card</p>
                        <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox details-link" title="Portfolio Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Web 2</h4>
                        <p>Web</p>
                        <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox details-link" title="Portfolio Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>App 3</h4>
                        <p>App</p>
                        <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox details-link" title="Portfolio Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Card 1</h4>
                        <p>Card</p>
                        <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox details-link" title="Portfolio Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Card 3</h4>
                        <p>Card</p>
                        <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox details-link" title="Portfolio Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Web 3</h4>
                        <p>Web</p>
                        <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox details-link" title="Portfolio Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </section>--><!-- End Portfolio Section -->




    <!-- ======= Pricing Section ======= -->
    <!-- End
    <section id="pricing" class="pricing">
        <div class="container">

            <div class="section-title">
                <h2>Pricing</h2>
                <p>text</p>
            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="box">
                        <h3>minimum</h3>
                        <h4><sup>$</sup>10<span> / month</span></h4>
                        <ul>
                            <li>text</li>
                            <li>text</li>
                            <li>text</li>
                            <li class="na">text</li>
                            <li class="na">text</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                    <div class="box featured">
                        <h3>Business</h3>
                        <h4><sup>$</sup>19<span> / month</span></h4>
                        <ul>
                            <li>Aida dere</li>
                            <li>Nec feugiat nisl</li>
                            <li>Nulla at volutpat dola</li>
                            <li>Pharetra massa</li>
                            <li class="na">Massa ultricies mi</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <div class="box">
                        <h3>Developer</h3>
                        <h4><sup>$</sup>29<span> / month</span></h4>
                        <ul>
                            <li>Aida dere</li>
                            <li>Nec feugiat nisl</li>
                            <li>Nulla at volutpat dola</li>
                            <li>Pharetra massa</li>
                            <li>Massa ultricies mi</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <div class="box">
                        <span class="advanced">Advanced</span>
                        <h3>Ultimate</h3>
                        <h4><sup>$</sup>49<span> / month</span></h4>
                        <ul>
                            <li>Aida dere</li>
                            <li>Nec feugiat nisl</li>
                            <li>Nulla at volutpat dola</li>
                            <li>Pharetra massa</li>
                            <li>Massa ultricies mi</li>
                        </ul>
                        <div class="btn-wrap">
                            <a href="#" class="btn-buy">Buy Now</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    --><!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <!--
    <section id="faq" class="faq section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>Text</p>
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">Text<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                            <p>
                                Text
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Text <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                            <p>
                                Text                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Text <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                            <p>
                                Text                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Text <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                            <p>
                                Text                            </p>
                        </div>
                    </li>



                </ul>
            </div>

        </div>
    </section>--><!-- End Frequently Asked Questions Section -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
            </div>

            <div class="row">

                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-map"></i>
                                <h3>{{__("messages.adres")}}</h3>
                                <p>Sint-Amandsstraat 54-56, 1853 Stroombeek-Bever</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box">
                                <i class="bx bx-map"></i>
                                <h3>{{__("messages.opening")}}</h3>
                                <p>{{__("messages.week")}}</p>
                                <p>{{__("messages.uur1")}} {{__("messages.uur2")}}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-envelope"></i>
                                <h3>Email Us</h3>
                                <p>info@grimbergenmotors.be</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="info-box mt-4">
                                <i class="bx bx-phone-call"></i>
                                <h3>Call Us</h3>
                                <p>02 267 19 51</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <ul>
                                @foreach($errors->all() as $error )
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if($message = Session::get('succes'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <p>{{$message}}</p>
                        </div>
                    @endif

                    <form id="contact-form" class="php-email-form" action="{{url('/sendmail')}}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label class="form-label" for="name"></label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="{{__("messages.name")}}" data-rule="minlen:4" data-msg="Please enter at least 4 chars" value="{{ old('message') }}" />
                                <div class="validate"></div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="form-label" for="email"></label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="{{__("messages.email")}}" data-rule="email" data-msg="Please enter a valid email" value="{{ old('message') }}" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="subject"></label>
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="{{__("messages.subject")}}" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" value="{{ old('message') }}" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="message"></label>
                            <textarea class="form-control" id="message" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="{{__("messages.message")}}"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>

                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>
                <div class="col pt-3 w-100">
                    <iframe class="w-100" title="Google Maps" src="{{__("messages.map")}}" allowfullscreen style="height: 50vh; border: none"></iframe>
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->
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
                        <li><i class="bx bx-chevron-right"></i> <a href="#hero">{{__("messages.home")}}</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#services">{{__("messages.diensten")}}</a></li>
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

<script src="{{asset('/js/main.js')}}"> </script>

</body>

</html>
