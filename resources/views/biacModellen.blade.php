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
                
                <figure>
                    <a href="http://www.baicintl.com/html/2017/suv_1015/7.html" target="_blank" rel=”noopener”><img src="{{asset('/images/BAIC/X55G.png')}}" class="img-fluid car" alt="X55" title="X55"></a>
                    <figcaption><h2>X55</h2></figcaption>
                </figure>
                <figure>
                    <a href="http://www.baicintl.com/html/2019/suv_0622/15.html" target="_blank" rel=”noopener”><img src="{{asset('/images/BAIC/X35.png')}}" class="img-fluid car" alt="X35" title="X35"></a>
                    <figcaption><h2>X35</h2></figcaption>
                </figure>
                <figure>
                    <a href="http://www.baicintl.com/html/2019/cars_0626/16.html" target="_blank" rel=”noopener”><img src="{{asset('/images/BAIC/D50.png')}}" class="img-fluid car" alt="D50" title="D50"></a>
                    <figcaption><h2>D50</h2></figcaption>
                </figure>
            </div>
         </div>
     </section>
@endsection
