@extends("master")
@section("title&meta")
    <meta name="description" content="{{__("messages.descriptionHome")}}">
    <title>Grimbergen motors Seres {{__("messages.model")}}</title>
@endsection
@section("main")
    <!-- ======= About Section ======= -->
    <section id="content">
        <div class="clients">
            <h1>seres {{__("messages.model")}}</h1>
            <div class="row d-flex align-items-center justify-content-center">
                <figure>
                    <a href="http://www.dfsk.com/portal/index/vehiclemodelmobile/id/65.html" target="_blank" rel=”noopener”><img src="{{asset('/images/SERES/seres3.png')}}" class="img-fluid car" alt="seres 3" title="seres 3"></a>
                    <figcaption><h2>seres 3</h2></figcaption>
                </figure>
            </div>
        </div>

        <div class="clients">
            <h2>{{__("messages.weldra")}}</h2>
            <div class="row d-flex align-items-center justify-content-center">
                <figure>
                    <a href="http://www.dfsk.com/portal/index/vehiclemodelmobile/id/66.html" target="_blank" rel=”noopener”><img src="{{asset('/images/SERES/seres5.png')}}" class="img-fluid car" alt="seres 5" title="seres 5"></a>
                    <figcaption><h2>seres 5</h2></figcaption>
                </figure>
                <figure>
                    <a href="https://www.driveseres.be/modellen/seres7/" target="_blank" rel=”noopener”><img src="{{asset('/images/SERES/seres7.jpg')}}" class="img-fluid car" alt="seres 7" title="seres 7"></a>
                    <figcaption><h2>seres 7</h2></figcaption>
                </figure>
            </div>
        </div>
    </section>
@endsection
