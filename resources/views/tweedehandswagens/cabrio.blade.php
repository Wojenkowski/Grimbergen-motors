@extends("master")
@section("title&meta")
    <meta name="description" content="{{__("messages.descriptionStock")}}">
    <title>Grimbergen motors audi A5 cabrio</title>s
@endsection
@section("main")
    <!-- ======= About Section ======= -->
    <section id="content">
        <div class="clients">
            <h1>cabrio</h1>
            <div class="row d-flex align-items-center justify-content-center">
                <figure>
                    <img src="{{asset('/images/tweedehands/cabrio/a5cabrio.jpg')}}" class="img-fluid car" alt="A5 cabrio" title="A5 cabrio">
                    <figcaption><h2>audi A5 cabrio</h2></figcaption>
                </figure>
            </div>
            <div class="container table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th>{{__("messages.merken")}}</th>
                        <th>Audio</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>{{__("messages.model")}}</th>
                        <td>A5 Cabrio</td>
                    </tr>
                    <tr>
                        <th>{{__("messages.cylinderinhoud")}}</th>
                        <td>1798cc</td>
                    </tr>
                    <tr>
                        <th>{{__("messages.vermogen")}}</th>
                        <td>118KW</td>
                    </tr>
                    <tr>
                        <td>{{__("messages.brandstof")}}</td>
                        <td>benzine</td>
                    </tr>
                    <tr>
                        <td>{{__("messages.gebruikstelling")}}</td>
                        <td>11/03/2011</td>
                    </tr>
                    <tr>
                        <td>{{__("messages.km")}}</td>
                        <td>+- 128000</td>
                    </tr>
                    <tr>
                        <td>{{__("messages.prijs")}}</td>
                        <td>15 000 €</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row d-flex align-items-center justify-content-center">
            <img src="{{asset('images/tweedehands/cabrio/1.JPG')}}" class="img-fluid car" alt="cabrio" title="cabrio">
            <img src="{{asset('images/tweedehands/cabrio/2.JPG')}}" class="img-fluid car" alt="cabrio" title="cabrio">
            <img src="{{asset('images/tweedehands/cabrio/3.JPG')}}" class="img-fluid car" alt="cabrio" title="cabrio">
            <img src="{{asset('images/tweedehands/cabrio/4.JPG')}}" class="img-fluid car" alt="cabrio" title="cabrio">
            <img src="{{asset('images/tweedehands/cabrio/5.JPG')}}" class="img-fluid car" alt="cabrio" title="cabrio">
            <img src="{{asset('images/tweedehands/cabrio/6.JPG')}}" class="img-fluid car" alt="cabrio" title="cabrio">
            <img src="{{asset('images/tweedehands/cabrio/7.JPG')}}" class="img-fluid car" alt="cabrio" title="cabrio">
            <img src="{{asset('images/tweedehands/cabrio/8.JPG')}}" class="img-fluid car" alt="cabrio " title="cabrio">
            <img src="{{asset('images/tweedehands/cabrio/9.JPG')}}" class="img-fluid car" alt="cabrio" title="cabrio">
            <img src="{{asset('images/tweedehands/cabrio/10.JPG')}}" class="img-fluid car" alt="cabrio" title="cabrio">
            <img src="{{asset('images/tweedehands/cabrio/11.JPG')}}" class="img-fluid car" alt="cabrio" title="cabrio">
        </div>
    </section>

@endsection
