<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=2.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#4285f4">
    <meta name="description" content="{{__("messages.description")}}">
    <title>Grimbergen motors</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.ico')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/resetCompressed.css')}}" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/screenCompressed.css')}}" />
    <link rel="manifest" href="{{asset('manifest.json')}}" />
</head>
<body>
<header>

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm ">
        <div class="container">

            <a><img tabindex="0" src="{{asset('/images/halfLogo.png')}}" width="100" title="Grimbergen motors logo" alt="Grimbergen motors logo"></a>

            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav    ml-auto">
                    <li class="nav-item active"><a tabindex="0" href="{{ url('./') }}" class="nav-link">{{__("messages.home")}}</a></li>
                    <li class="nav-item active"><a tabindex="0" href="{{ url('/diensten') }}" class="nav-link">{{__("messages.diensten")}}</a></li>
                    <li class="nav-item active"><a tabindex="0" href="{{ url('/promoties') }}" class="nav-link">{{__("messages.promoties")}}</a></li>
                    <li class="nav-item active"><a tabindex="0" href="{{ url('/expertise') }}" class="nav-link">{{__("messages.expertise")}}</a></li>
                    <li class="nav-item active"><a tabindex="0" href="{{ url('/ons') }}" class="nav-link">{{__("messages.ons")}}</a></li>
                    <li class="nav-item active"><a tabindex="0" href="{{ url('/contact') }}" class="nav-link">{{__("messages.contact")}}</a></li>
                    <li class="nav-item active"><a tabindex="0" href="{{ url('/location') }}" class="nav-link">{{__("messages.location")}}</a></li>
                    <li class="dropdown">
                        <p class="nav-item active dropdown-toggle nav-link " id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{__("messages.wagens")}}
                        </p>
                        <div class="dropdown-menu">
                            <a tabindex="0" class="dropdown-item" href="{{ url('/vervangwagens') }}">{{__("messages.vervangwagens")}}</a>
                            <a tabindex="0" class="dropdown-item " href="{{ url('/tweedehandswagens') }}">{{__("messages.tweedehandswagens")}}</a>
                            {{--                            <div class="dropdown-divider "></div>--}}
                            <a tabindex="0" class="dropdown-item " href="{{ url('/directiewagen') }}">{{__("messages.directiewagen")}}</a>
                        </div>
                    </li>
                    <li><a tabindex="0" class="language" href="{{ url('locale/nl') }}">NL</a></li>
                    <li><a tabindex="0" class="language" href="{{ url('locale/fr') }}">FR</a></li>
                    <li><a tabindex="0" class="language" href="{{ url('locale/en') }}">EN</a></li>
                </ul>

            </div>
        </div>
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
                <p><a href="{{ url('/contact') }}"> info@grimbergenmotors.be</a></p>
            </div>
        </div>
        <div class="footer-right col-md-4 col-sm-6">
            <a class="p-lg-5"><img src="{{asset('/images/fullLogo.png')}}" width="75" title="Grimbergen motors logo" alt="Grimbergen motors logo"></a>
            <p class="menu">
                <a href="{{ url('./') }}">{{__("messages.home")}}</a> |
                <a href="{{ url('/diensten') }}">{{__("messages.diensten")}}</a> |
                <a href="{{ url('/promoties') }}">{{__("messages.promoties")}}</a> |
                <a href="{{ url('/expertise') }}">{{__("messages.expertise")}}</a> |
                <a href="{{ url('./ons') }}">{{__("messages.ons")}}</a> |
                <a href="{{ url('/contact') }}">{{__("messages.contact")}}</a> |
                <a href="{{ url('/location') }}">{{__("messages.location")}}</a> |
                <a href="{{ url('/vervangwagens') }}">{{__("messages.vervangwagens")}}</a> |
                <a href="{{ url('/tweedehandswagens') }}">{{__("messages.tweedehandswagens")}}</a> |
                <a href="{{ url('/directiewagen') }}">{{__("messages.directiewagen")}}</a>
        </div>



    </footer>
    <section class="copyright">
        <div class="text-center text-white">
            &copy; 2020 Grimbergen motors. {{__("messages.rechten")}}

        </div>
    </section>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
