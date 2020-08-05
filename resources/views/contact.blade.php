@extends("master")

@section("main")

    <section id="contact" class="container">
        <h1>Grimbergen motors</h1>
        <article>
            <h2>{{__("messages.telefoon")}}:</h2>
            <p>022 67 19 51</p>
        </article>

        <article>
            <h2>Email:</h2>
            <p>info@grimbergenmotors.be</p>
        </article>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3 center">

            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <ul>
                        @foreach($errors->all() as $error )
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if($message = Session::get('succes'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <p>{{$message}}</p>
                </div>
            @endif

            <form id="contact-form" class="form" action="{{url('/sendmail')}}" method="POST" role="form">
                @csrf
                <label class="form-label" for="name">{{__("messages.name")}}</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="{{__("messages.name")}}" tabindex="1"  value="{{ old('name') }}" required>

                <label class="form-label" for="email">{{__("messages.email")}}</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="{{__("messages.email")}}" tabindex="2" value="{{ old('email') }}" required>

                <label class="form-label" for="subject">{{__("messages.subject")}}</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="{{__("messages.subject")}}" tabindex="3" value="{{ old('subject') }}" required>

                <label class="form-label" for="message">{{__("messages.message")}}</label>
                <textarea rows="5" cols="50" name="message" class="form-control" id="message" placeholder="{{__("messages.message")}}" tabindex="4" value="{{ old('message') }}" required></textarea>


                <input type="checkbox" id="checkbox" name="checkbox" value="checkbox" required >
                <label for="checkbox"> {{__("messages.voorwaarden")}}</label> <a href="{{asset('/Files/Algemene voorwaarden voor verkopen en herstellingen.pdf')}}">{{__("messages.algemeen")}}</a><br>

                <button type="submit" class="btn btn-start-order">{{__("messages.send")}}</button>

            </form>
        </div>

    </section>
    <section>
        <h2><a href="https://www.privacypolicies.com/privacy/view/61460f60c916824f9a8e778c145c6875">{{__("messages.policy")}}</a></h2>
    </section>


@endsection
