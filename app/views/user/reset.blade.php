@extends("layouts.layout")

@section('title')
    Mot de passe oublié
@stop

@section('description')
    Se connecter au Caveau Quinard
@stop

@section("content")
<section class="header"></section>
<section id="reset">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 login">
                @if (Session::get("error"))
                    <div class="alert alert-danger">{{ Session::get("error") }}</div>
                @endif

                {{ Form::open() }}
                <div class="row">
                    <div class="col-xs-12">
                        {{ Form::label("email", "Email") }}
                    </div>
                    <div class="col-xs-12">
                        {{ Form::text("email", Input::old("email"), array('class' => 'form-control')) }}
                    </div>
                    <div class="col-xs-12">
                        {{ Form::label("password", "Mot de passe") }}
                    </div>
                    <div class="col-xs-12">
                        {{ Form::password("password", array('class' => 'form-control')) }}
                    </div>
                    <div class="col-xs-12">
                        {{ Form::label("password_confirmation", "Confirmer") }}
                    </div>
                    <div class="col-xs-12">
                        {{ Form::password("password_confirmation", array('class' => 'form-control')) }}
                    </div>
                    <div class="col-xs-12 text-right">
                        {{ Form::submit("Changer", array('class' => 'btn btn-purple btn-lg', 'style' => 'margin-top:20px;')) }}
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</section>
@stop