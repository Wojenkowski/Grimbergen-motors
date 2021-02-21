@extends("master")
@section("title&meta")
    <meta name="robots" content="noindex">
    <meta name="description" content="404 error page not found">
    <title>404 error</title>
@endsection
@section("main")
    <!-- ======= About Section ======= -->
    <section id="content">
        <div class="clients">
            <h1>404 error - page not found.</h1>
            <div class="row d-flex align-items-center justify-content-center">
                <a href="/"><button class="btn btn-danger btn-get-started">{{__("messages.home")}}</button></a>
            </div>
        </div>
    </section>
@endsection
