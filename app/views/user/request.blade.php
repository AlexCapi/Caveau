@extends("layouts.layout")
@section("content")
{{ Form::open() }}
    @if (Session::get("error"))
    <div class="alert alert-danger">{{ Session::get("error") }}</div>
    @endif
    @if (Session::get("status"))
    <div class="alert alert-success">{{ Session::get("status") }}</div>
    @endif
    {{ Form::label("email", "Email") }}
    {{ Form::text("email", Input::old("email")) }}
    {{ Form::submit("Reset", array('class' => 'btn btn-danger')) }}
{{ Form::close() }}
@stop