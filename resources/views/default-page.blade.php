@extends("master")
@section("title&meta")
    <meta name="description" content="{{__("messages.descriptionStock")}}">
    <title>Grimbergen motors Stock {{__("messages.model")}}</title>s
@endsection
@section("main")
    <!-- ======= About Section ======= -->
    <section id="content">
        <div class="clients">
            <h1>{{__("messages.stock")}}</h1>
            <div class="row d-flex align-items-center justify-content-center">
                <figure>
                    <a href="https://dfsk-motors.be/modellen/fengon/" target="_blank" rel=”noopener”><img src="{{asset('/images/DFSK/DFSKFengon.png')}}" class="img-fluid car" alt="X55" title="X55"></a>
                    <figcaption><h2>DSFK fengon</h2></figcaption>
                </figure>
                <figure>
                    <a href="http://www.dfsk.com/portal/index/vehiclemodelmobile/id/66.html" target="_blank" rel=”noopener”><img src="{{asset('/images/SERES/seres5.png')}}" class="img-fluid car" alt="seres 5" title="seres 5"></a>
                    <figcaption><h2>seres 5</h2></figcaption>
                </figure>

                <figure>
                    <a href="http://www.baicintl.com/html/2017/suv_1015/7.html" target="_blank" rel=”noopener”><img src="{{asset('/images/BAIC/X55G.png')}}" class="img-fluid car" alt="X55" title="X55"></a>
                    <figcaption><h2>BAIC X55</h2></figcaption>
                </figure>

            </div>
        </div>
    </section>


@endsection
