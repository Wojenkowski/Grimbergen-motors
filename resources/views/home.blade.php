@extends("master")

@section("main")

    <section id="homeContact">
        <h1>Grimbergen Motors</h1>
        <article>
            <h3>{{__("messages.adres")}}:</h3>
            <p>Sint-Amandsstraat 54-56, 1853 Stroombeek-Bever</p>
        </article>

        <article>
            <h3>{{__("messages.opening")}}:</h3>
            <p>{{__("messages.week")}}</p>
            <p>{{__("messages.uur1")}} {{__("messages.uur2")}}</p>
        </article>

        <article>
            <h3>{{__("messages.telefoon")}}:</h3>
            <p>02 267 19 51</p>
        </article>

        <article>
            <h3>Email:</h3>
            <p>info@grimbergenmotors.be</p>
        </article>

        <article>
            <h3>{{__("messages.btw")}}:</h3>
            <p>BE0419805013</p>
        </article>

        <article>
            <h3>{{__("messages.HRB")}}:</h3>
            <p>296434</p>
        </article>

    </section>

    <section>
        <img title="Coronamaatregelen" src="{{asset('/images/Coronamaatregelen-1.jpg')}}" height="50%" width="50%" alt="Coronamaatregelen">
    </section>

@endsection
