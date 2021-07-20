@extends("master")
@section("title&meta")
    <meta name="description" content="{{__("messages.descriptionStock")}}">
    <title>Grimbergen motors Stock {{__("messages.stock2")}}</title>s
@endsection
@section("main")
    <!-- ======= About Section ======= -->
    <section id="content">
        <div class="clients">
            <h1>{{__("messages.stock2")}}</h1>
            <div class="row d-flex align-items-center justify-content-center">
                <!--
                <figure>
                    <a href="tweedehandswagens/scenic3/"><img src="{{asset('/images/tweedehands/scenic3/scenic.jpg')}}" class="img-fluid car" alt="scenic3" title="scenic3"></a>
                    <figcaption><h2>scenic3</h2></figcaption>
                </figure>
                -->
                <figure>
                    <a href="tweedehandswagens/cabrio/"><img src="{{asset('/images/tweedehands/cabrio/a5cabrio.jpg')}}" class="img-fluid car" alt="A5 cabrio" title="A5 cabrio"></a>
                    <figcaption><h2>Audi A5</h2></figcaption>
                </figure>



            </div>
        </div>
    </section>


@endsection
