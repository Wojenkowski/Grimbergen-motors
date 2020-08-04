@extends("master")

@section("main")


    <section class="gamma">
        <h1>Renault gamma</h1>

        <h2>{{__("messages.ondek")}}</h2>

        <ul>
            <li><a id="corporate" class="text-underline-2" target="#" href="https://pro.renault.be/nl?range=vp">{{__("messages.corporate")}}</a></li>
            <li><a id="aanbieding" class="text-underline-2" target="#" href="https://aanbiedingen.renault.be/">{{__("messages.aanbiedingen")}}</a></li>
            <li><a id="elektrische" class="text-underline-2" target="#" href="https://aanbiedingen.renault.be/?range=ze">{{__("messages.Elektrische")}}</a></li>
            <li><a id="bedrijfswagen" class="text-underline-2" target="#" href="https://pro.renault.be/nl/?range=vu">{{__("messages.Bedrijfswagens")}}</a></li>
        </ul>

    </section>

    <section class="gamma">
        <img src="{{asset('/images/sport.jpg')}}" title="MEGANE R.S." alt="MEGANE R.S.">
    </section>

    <script src="{{asset('/Javascript/main.js')}}"></script>


@endsection
