@extends("master")
@section("title&meta")
    <meta name="description" content="{{__("messages.descriptionHome")}}">
    <title>Grimbergen motors corona</title>
@endsection

@section("main")
    <!-- ======= About Section ======= -->
    <section id="content" >
        <div class="container">
            <h1>Corona maatregelen</h1>
            <p>only in dutch/Uniquement en néerlandais</p>
            <object width="100%" height="980px" type="application/pdf" data="{{asset('/Files/Coronamaatregelen.pdf')}}?#zoom=85&scrollbar=0&toolbar=0&navpanes=0">
                <p>not available on phone.</p>
            </object>

         </div>
     </section>
@endsection
