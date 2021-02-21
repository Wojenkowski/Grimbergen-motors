@extends("master")
@section("title&meta")
    <meta name="description" content="{{__("messages.descriptionHome")}}">
    <title>Grimbergen motors {{__("messages.allemerken")}}</title>
@endsection
@section("main")
    <!-- ======= About Section ======= -->
    <section id="content" class="clients">
        <h1>merken</h1>
        <div class="container" data-aos="zoom-in">

            <div class="row d-flex align-items-center justify-content-center">

                    <a href="baic"><img src="{{asset('/images/Logo_Baic.png')}}" class="img-fluid car" alt="baic" title="baic"></a>

                    <a href="dfsk"><img src="{{asset('/images/Logo_DFSK.png')}}" class="img-fluid car" alt="dfsk" title="dfsk"></a>

                    <a href="seres"><img src="{{asset('/images/Logo_seres.jpg')}}" class="img-fluid car" alt="seres" title="seres"></a>

            </div>
        </div>
    </section><!-- End Counts Section -->
@endsection
