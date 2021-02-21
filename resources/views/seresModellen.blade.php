@extends("master")
@section("title&meta")
    <meta name="description" content="{{__("messages.descriptionHome")}}">
    <title>Grimbergen motors Seres {{__("messages.model")}}</title>
@endsection
@section("main")
    <!-- ======= About Section ======= -->
    <section id="content">
        <div class="clients">
            <h1>seres modellen</h1>
            <div class="row d-flex align-items-center justify-content-center">

                <figure>
                    <a href="http://www.dfsk.com/portal/index/vehiclemodelmobile/id/66.html" target="_blank" rel=”noopener”><img src="{{asset('/images/SERES/seres5.png')}}" class="img-fluid car" alt="seres 5" title="seres 5"></a>
                    <figcaption><h2>seres 5</h2></figcaption>
                </figure>

            </div>
        </div>
    </section>
@endsection
