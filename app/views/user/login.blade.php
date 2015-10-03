@extends("layouts.layout")

@section('title')
    Connexion
@stop

@section('description')
    Se connecter au Caveau Quinard
@stop

@section("content")
<section class="header"></section>
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 login">
                <div class="row">
                    <div class="col-xs-12">
                        <img src="{{ URL::asset('images/login_user.png') }}" class="img-responsive img-centered">
                    </div>
                </div>
                @if ($errors->first("username"))
                <div class="alert alert-danger">{{ $errors->first("username") }}</div>
                @endif
                @if ($errors->first("password"))
                <div class="alert alert-danger">{{ $errors->first("password") }}</div>
                @endif
                @if (!empty(Session::get('success')))
                <div class="alert alert-success">{{ Session::get('success') }}</div>
                @endif

                {{ Form::open() }}
                <div class="row">
                    <div class="col-xs-12">
                        {{ Form::label("username", "Pseudo") }}
                    </div>
                    <div class="col-xs-12">
                        {{ Form::text("username", Input::old("username"), array('class' => 'form-control')) }}
                    </div>
                    <div class="col-xs-12">
                        {{ Form::label("password", "Mot de passe") }}
                    </div>
                    <div class="col-xs-12">
                        {{ Form::password("password", array('class' => 'form-control')) }}
                    </div>
                    <div class="col-xs-12 text-right">
                        {{ Form::submit("OK", array('class' => 'btn btn-purple btn-lg', 'style' => 'margin-top:20px;')) }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 text-right">
                        <cite>
                            <a href="{{ URL::to("request") }}" class="text-muted">Mot de passe oublié?</a>
                        </cite>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</section>
@stop