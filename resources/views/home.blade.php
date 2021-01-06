@extends("master")

@section("title&meta")
    <title>Grimbergen motors</title>
    <meta name="description" content="{{__("messages.descriptionHome")}}">
@endsection

@section("main")

    <section id="homeContact">
        <h1>Grimbergen Motors Garage</h1>
        <img class="maatregelen" title="Coronamaatregelen" src="{{asset('/images/Coronamaatregelen-3-min.jpg')}}" alt="Coronamaatregelen">
    </section>
@endsection
