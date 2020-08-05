@extends("master")

@section("main")

    <section id="homeContact">
        <h1>Grimbergen Motors</h1>
        <article>
            <h2>{{__("messages.adres")}}:</h2>
            <p>Sint-Amandsstraat 54-56, 1853 Stroombeek-Bever</p>
        </article>

        <article>
            <h2>{{__("messages.opening")}}:</h2>
            <p>{{__("messages.week")}}</p>
            <p>{{__("messages.uur1")}} {{__("messages.uur2")}}</p>
        </article>

        <article>
            <h2>{{__("messages.telefoon")}}:</h2>
            <p>02 267 19 51</p>
        </article>

        <article>
            <h2>Email:</h2>
            <p>info@grimbergenmotors.be</p>
        </article>

        <article>
            <h2>{{__("messages.btw")}}:</h2>
            <p>BE0419805013</p>
        </article>

        <article>
            <h2>{{__("messages.HRB")}}:</h2>
            <p>296434</p>
        </article>

    </section>

    <section>
        <img title="Coronamaatregelen" src="{{asset('/images/Coronamaatregelen-1.jpg')}}" height="50%" width="50%" alt="Coronamaatregelen">
    </section>

@endsection
