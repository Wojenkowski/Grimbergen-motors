@extends("master")

@section("main")

    <section id="homeContact">
        <article>
            <h2>{{__("messages.adres")}}:</h2>
            <p>Sint-Amandsstraat 54-56, 1835 Stroombeek-Bever</p>
        </article>
        <article>
            <h2>{{__("messages.opening")}}:</h2>
            <p>{{__("messages.week")}}</p>
            <p>{{__("messages.uur1")}} {{__("messages.uur2")}}</p>
        </article>

    </section>

    <section >



        <iframe class="map" title="Google Maps" src="{{__("messages.map")}}" allowfullscreen=""></iframe>
    </section>


@endsection
