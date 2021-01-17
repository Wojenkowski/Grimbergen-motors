@extends("master")
@section("title&meta")
    <meta name="description" content="{{__("messages.descriptionHome")}}">
    <title>Grimbergen motors {{__("messages.diensten")}}</title>
@endsection
@section("main")
    <!-- ======= About Section ======= -->
    <section id="content">
        <div class="clients">
            <h1>baic modellen</h1>
            <div class="row d-flex align-items-center justify-content-center">

                <a href="http://www.dfsk.com/portal/index/vehiclemodel/id/50.html" target="_blank"><img src="{{asset('/images/DFSK/glory580.png')}}" class="img-fluid car" alt="glory 580" title="glory 580"></a>

                <a href="http://www.dfsk.com/portal/index/vehiclemodel/id/70.html" target="_blank"><img src="{{asset('/images/DFSK/gloryix7.png')}}" class="img-fluid car" alt="glory ix7" title="glory ix7"></a>

                <a href="http://www.dfsk.com/portal/index/vehiclemodel/id/52.html" target="_blank"><img src="{{asset('/images/DFSK/glorys560.png')}}" class="img-fluid car" alt="glory s560" title="glory s560"></a>

            </div>
        </div>
    </section>
@endsection
