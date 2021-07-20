@extends("master")
@section("title&meta")
    <meta name="description" content="{{__("messages.descriptionHome")}}">
    <title>Grimbergen motors BAIC {{__("messages.model")}}</title>
@endsection
@section("main")
    <!-- ======= About Section ======= -->
    <section id="content">
        <div class="clients">
            <h1>{{__("messages.weldra")}}</h1>
            <div class="row d-flex align-items-center justify-content-center">
                <figure>
                    <a href="http://www.faw.com/fawen/ppycp7968/passenger_cars/5293324/index.html" target="_blank" rel=”noopener”><img src="{{asset('/images/FAW/t77.png')}}" class="img-fluid car" alt="t77" title="t77"></a>
                    <figcaption><h2>t77</h2></figcaption>
                </figure>

            </div>
        </div>
     </section>
@endsection
