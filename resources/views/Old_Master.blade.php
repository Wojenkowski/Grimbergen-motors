<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-180268137-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-180268137-1');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=2.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#4285f4">
    @yield("title&meta")
    <link  rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.ico')}}"/>
    <link  rel="stylesheet" type="text/css" href="{{asset('/css/resetCompressed.css')}}" />
    <link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link  rel="stylesheet" type="text/css" href="{{asset('/css/screen.css')}}" />
    <link  rel="manifest" href="{{asset('manifest.json')}}" />
</head>
<body>
<header>

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm ">
        <section class="container">

            <a><img tabindex="0" src="{{asset('/images/halfLogoNotCompressed100x145.png')}}" title="Grimbergen motors logo" alt="Grimbergen motors logo"></a>

            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav    ml-auto">
                    <li  class="nav-item active"><a rel="prefetch" tabindex="0" href="{{ url('./') }}" class="nav-link">{{__("messages.home")}}</a></li>
                    <li  class="nav-item active"><a rel="prefetch" tabindex="0" href="{{ url('/diensten') }}" class="nav-link">{{__("messages.diensten")}}</a></li>
                <!--<li  class="nav-item active"><a rel="prefetch"a tabindex="0" href="{{ url('/promoties') }}" class="nav-link">{{__("messages.promoties")}}</a></li>
                    <li  class="nav-item active"><a rel="prefetch" tabindex="0" href="{{ url('/expertise') }}" class="nav-link">{{__("messages.expertise")}}</a></li>
                    <li  class="nav-item active"><a rel="prefetch" tabindex="0" href="{{ url('/ons') }}" class="nav-link">{{__("messages.ons")}}</a></li> -->
                    <li  class="nav-item active"><a rel="prefetch" tabindex="0" href="{{ url('/contact') }}" class="nav-link">{{__("messages.contact")}}</a></li>
                    <li  class="nav-item active"><a rel="prefetch" tabindex="0" href="{{ url('/location') }}" class="nav-link">{{__("messages.location")}}</a></li>
                <!--<li class="dropdown">
                        <p class="nav-item active dropdown-toggle nav-link " id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{__("messages.wagens")}}
                        </p>
                        <div class="dropdown-menu">
                            <a tabindex="0" class="dropdown-item" href="{{ url('/vervangwagens') }}">{{__("messages.vervangwagens")}}</a>
                            <a tabindex="0" class="dropdown-item " href="{{ url('/tweedehandswagens') }}">{{__("messages.tweedehandswagens")}}</a>
                            {{--                            <div class="dropdown-divider "></div>--}}
                            <a tabindex="0" class="dropdown-item " href="{{ url('/directiewagen') }}">{{__("messages.directiewagen")}}</a>
                        </div>
                    </li>-->
                    <li><a tabindex="0" class="language" href="{{ url('locale/nl') }}">NL</a></li>
                    <li><a tabindex="0" class="language" href="{{ url('locale/fr') }}">FR</a></li>
                    <li><a tabindex="0" class="language" href="{{ url('locale/en') }}">EN</a></li>
                </ul>

            </div>
        </section>
    </nav>
</header>

<main>
    @yield("main")
</main>

<div class="footer">
    <footer>
        <div class="footer-left col-md-4 col-sm-6">
            <p class="about">
                <span> {{__("messages.about")}}</span> {{__("messages.missie")}}
            </p>
        </div>
        <div class="footer-center col-md-4 col-sm-6">
            <div>
                <em class="fa fa-map-marker"></em>
                <p><span> Sint-Amandsstraat 54-56,</span> 1853 Strombeek-Bever</p>
            </div>
            <div>
                <em class="fa fa-phone"></em>
                <p> (+32) 02 267 19 51</p>
            </div>
            <div>
                <em class="fa fa-envelope"></em>
                <p><a tabindex="0" href="{{ url('/contact') }}"> info@grimbergenmotors.be</a></p>
            </div>
        </div>
        <div class="footer-right col-md-4 col-sm-6">
            <a><img tabindex="0" src="{{asset('/images/fullLogoNotCompressed.png')}}" title="Grimbergen motors logo" alt="Grimbergen motors logo"></a>
            <p class="menu">
                <a href="{{ url('./') }}">{{__("messages.home")}}</a> |
                <a href="{{ url('/diensten') }}">{{__("messages.diensten")}}</a> |
                <!--<a href="{{ url('/promoties') }}">{{__("messages.promoties")}}</a> |
                <a href="{{ url('/expertise') }}">{{__("messages.expertise")}}</a> |
                <a href="{{ url('./ons') }}">{{__("messages.ons")}}</a> |-->
                <a href="{{ url('/contact') }}">{{__("messages.contact")}}</a> |
                <a href="{{ url('/location') }}">{{__("messages.location")}}</a> <!--|
            <a href="{{ url('/vervangwagens') }}">{{__("messages.vervangwagens")}}</a> |
                <a href="{{ url('/tweedehandswagens') }}">{{__("messages.tweedehandswagens")}}</a> |
                <a href="{{ url('/directiewagen') }}">{{__("messages.directiewagen")}}</a>-->
        </div>

    </footer>
    <section class="copyright">
        <div class="text-center text-white">
            &copy; 2020 Grimbergen motors. {{__("messages.rechten")}}
        </div>
    </section>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
</body>
</html>
