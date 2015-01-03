@extends("layouts.layout")
@section("content")
<section class="header"></section>
<section class="mdp">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-4 text-center">
                {{ Form::open() }}
                @if (Session::get("error"))
                <div class="alert alert-danger">{{ Session::get("error") }}</div>
                @endif
                @if (Session::get("status"))
                <div class="alert alert-success">{{ Session::get("status") }}</div>
                @endif
                {{ Form::label("email", "Email") }}
                {{ Form::text("email", Input::old("email"), array('class' => 'form-control')) }}
                {{ Form::submit("Reinitialiser", array('class' => 'btn btn-purple', 'style' => 'margin-top:10px;')) }}
                {{ Form::close() }}
            </div>
        </div>
    </div>
</section>
@stop