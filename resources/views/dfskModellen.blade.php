@extends("master")
@section("title&meta")
    <meta name="description" content="{{__("messages.descriptionHome")}}">
    <title>Grimbergen motors DSFK {{__("messages.model")}}</title>
@endsection
@section("main")
    <!-- ======= About Section ======= -->
    <section id="content">
        <div class="clients">
            <h1>dfsk modellen</h1>
            <div class="row d-flex align-items-center justify-content-center">

                <figure>
                    <a href="http://www.dfsk.com/portal/index/vehiclemodel/id/50.html" target="_blank" rel=”noopener”><img src="{{asset('/images/DFSK/glory580.png')}}" class="img-fluid car" alt="glory 580" title="glory 580"></a>
                    <figcaption><h2>glory 580</h2></figcaption>
                </figure>




            </div>
        </div>

        <div class="clients">
            <h2>{{__("messages.weldra")}}</h2>
            <div class="row d-flex align-items-center justify-content-center">

                <figure>
                    <a href="http://www.dfsk.com/portal/index/vehiclemodel/id/70.html" target="_blank" rel=”noopener”><img src="{{asset('/images/DFSK/gloryix7.png')}}" class="img-fluid car" alt="glory ix7" title="glory ix7"></a>
                    <figcaption><h2>glory ix7</h2></figcaption>
                </figure>

                <figure>
                    <a href="http://www.dfsk.com/portal/index/vehiclemodel/id/52.html" target="_blank" rel=”noopener”><img src="{{asset('/images/DFSK/glorys560.png')}}" class="img-fluid car" alt="glory s560" title="glory s560"></a>
                    <figcaption><h2>glory s560</h2></figcaption>
                </figure>

                <figure>
                    <a href="http://www.dfsk.com/portal/index/vehiclemodelmobile/id/51.html" target="_blank" rel=”noopener”><img src="{{asset('/images/DFSK/ix5.png')}}" class="img-fluid car" alt="glory ix5" title="glory ix5"></a>
                    <figcaption><h2>glory ix5</h2></figcaption>
                </figure>

                <figure>
                    <a href="http://www.dfsk.com/portal/index/vehiclemodel/id/57.html" target="_blank" rel=”noopener”><img src="{{asset('/images/DFSK/c35.png')}}" class="img-fluid car" alt="c35" title="c35"></a>
                    <figcaption><h2>C35</h2></figcaption>
                </figure>


            </div>
        </div>
    </section>
@endsection
