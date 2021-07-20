@extends("master")
@section("title&meta")
    <meta name="description" content="Mea culpa grimbergen motors">
    <title>Grimbergen motors Mea culpa</title>
@endsection
@section("main")
    <!-- ======= About Section ======= -->
    <section id="content">
        <div class="container">
            <h1>{{__("messages.Mea culpa")}}</h1>
            <object width="100%" height="980px" type="application/pdf" data="{{asset('/Files/Mea culpa.pdf')}}?#scrollbar=0&toolbar=0&navpanes=0">
                <p>Insert your error message here, if the PDF cannot be displayed.</p>
            </object>

         </div>
     </section>
@endsection
