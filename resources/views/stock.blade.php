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
                    <a href="stock/Fengon/"><img src="{{asset('/images/DFSK/DFSKFengon.png')}}" class="img-fluid car" alt="X55" title="X55"></a>
                    <figcaption><h2>DSFK fengon</h2></figcaption>
                </figure>
                <figure>
                    <a href="stock/seres/"><img src="{{asset('/images/SERES/seres3.png')}}" class="img-fluid car" alt="seres 3" title="seres 3"></a>
                    <figcaption><h2>seres 3</h2></figcaption>
                </figure>

                <figure>
                    <a href="stock/x55/"><img src="{{asset('/images/BAIC/X55G.png')}}" class="img-fluid car" alt="X55" title="X55"></a>
                    <figcaption><h2>BAIC X55</h2></figcaption>
                </figure>

            </div>
        </div>
    </section>


@endsection
