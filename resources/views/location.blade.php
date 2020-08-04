@extends("master")

@section("main")

    <section id="homeContact">
        <article>
            <h3>{{__("messages.adres")}}:</h3>
            <p>Sint-Amandsstraat 54-56, 1835 Stroombeek-Bever</p>
        </article>
        <article>
            <h3>{{__("messages.opening")}}:</h3>
            <p>{{__("messages.week")}}</p>
            <p>{{__("messages.uur1")}} {{__("messages.uur2")}}</p>
        </article>

    </section>

    <section >



        <iframe class="map" title="Google Maps"src="{{__("messages.map")}}" allowfullscreen=""></iframe>
    </section>


@endsection
