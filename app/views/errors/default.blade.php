@extends("layouts.layout")
@section("content")
<section class="header"></section>
<section id="error">
    <div class="container marketing">

        <div class="row">
            <div class="col-xs-12">
                <div class="well-lg">
                    <h1><span class="glyphicon glyphicon-cloud"></span><br> Oups !</h1>
                    <p>On dirait que la page que vous recherchez n'est plus disponible.</p>
                    <p>Vous pouvez retenter votre chance en cliquant ici</p>
                    <a class="btn btn-purple" href="{{ URL::to('home') }}">Notre site !</a>
                </div>
            </div>
        </div>

    </div>
</section>
@stop

@section("scripts")

{{HTML::script('js/general.js')}}

@stop