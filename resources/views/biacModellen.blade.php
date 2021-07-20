@extends("master")
@section("title&meta")
    <meta name="description" content="{{__("messages.descriptionHome")}}">
    <title>Grimbergen motors BAIC {{__("messages.model")}}</title>
@endsection
@section("main")
    <!-- ======= About Section ======= -->
    <section id="content">
        <div class="clients">
            <h1>baic {{__("messages.model")}}</h1>
            <div class="row d-flex align-items-center justify-content-center">

                <figure>
                    <a href="http://www.baicintl.com/html/2017/suv_1015/7.html" target="_blank" rel=”noopener”><img src="{{asset('/images/BAIC/X55.png')}}" class="img-fluid car" alt="X55" title="X55"></a>
                    <figcaption><h2>X55</h2></figcaption>
                </figure>

            </div>
         </div>
        <div class="clients">
            <h2>{{__("messages.weldra")}}</h2>
            <div class="row d-flex align-items-center justify-content-center">
                <figure>
                    <a href="https://baic-motor.be/modellen/x35/" target="_blank" rel=”noopener”><img src="{{asset('/images/BAIC/X35.png')}}" class="img-fluid car" alt="X35" title="X35"></a>
                    <figcaption><h2>X35</h2></figcaption>
                </figure>

                <figure>
                    <a href="https://www.wautom.com/2018/09/gallery-baic-senova-ex5-electric-car/" target="_blank" rel=”noopener”><img src="{{asset('/images/BAIC/EX5.png')}}" class="img-fluid car" alt="EX5" title="EX5"></a>
                    <figcaption><h2>EX5</h2></figcaption>
                </figure>
                <figure>
                    <a href="https://www.wautom.com/2020/05/baic-beijing-x7-suv/" target="_blank" rel=”noopener”><img src="{{asset('/images/BAIC/X7.png')}}" class="img-fluid car" alt=X7" title="X57"></a>
                    <figcaption><h2>X7</h2></figcaption>
                </figure>
            </div>
        </div>
     </section>
@endsection
