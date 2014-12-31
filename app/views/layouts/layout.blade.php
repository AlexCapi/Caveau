<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Caveau Quinard</title>
        <link href="{{ URL::asset('bower/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('bower/lightgallery/light-gallery/css/lightgallery.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('css/layout.css') }}" rel="stylesheet">
    </head>
    <body>
        @include("layouts.header")
        @if (isset($error))
        <div class="container">
            <div class="alert alert-danger">{{ $error }}</div>
        </div>
        @endif
        @if (isset($success))
        <div class="container">
            <div class="alert alert-success">{{ $success }}</div>
        </div>
        @endif

        @yield("content")

        @include("layouts.footer")
    </body>
    {{HTML::script('bower/jquery/dist/jquery.min.js')}}
    {{HTML::script('bower/bootstrap/dist/js/bootstrap.min.js')}}
    {{HTML::script('bower/lightgallery/light-gallery/js/lightgallery.min.js')}}
</html>