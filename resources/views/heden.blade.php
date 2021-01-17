@extends("master")
@section("title&meta")
    <meta name="description" content="{{__("messages.descriptionHome")}}">
    <title>Grimbergen motors {{__("messages.diensten")}}</title>
@endsection
@section("main")
    <!-- ======= About Section ======= -->
    <section id="content">
        <div class="container">
            <h1>{{__("messages.pastTitle")}}</h1>
            <p>only in dutch/Uniquement en néerlandais</p>
            <object width="100%" height="980px" type="application/pdf" data="{{asset('/Files/heden.pdf')}}?#zoom=85&scrollbar=0&toolbar=0&navpanes=0">
                <p>Insert your error message here, if the PDF cannot be displayed.</p>
            </object>

         </div>
     </section>
@endsection
