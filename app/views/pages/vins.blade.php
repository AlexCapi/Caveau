@extends("layouts.layout")
@section("content")
<section class="header"></section>
<section id="vins">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title">
                    <h1>Les meilleurs vins du Bugey</h1>
                    <p class="section-description">Consulter les fiches détaillés de nos vins. Et si vous vous laisser séduire, vous pouvez même commander en ligne.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 text-center">
                <p class="text-muted">Nos vins par catégorie</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
                @foreach ($vinsCategories as $categorie => $vins)
                    @if(sizeof($vins) != 0)
                        <a class="block-categorie" href="#{{ $categorie }}">{{ $categorie }}</a>
                    @endif
                @endforeach
            </div>
        </div>

        @foreach ($vinsCategories as $categorie => $vins)
            @if(sizeof($vins) != 0)
                <h2 class="title" id="{{ $categorie }}">{{ $categorie }}</h2>

                @foreach ($vins as $key => $vin)
                    @if ($key % 2 == 0)
                        @if($key != 0)
                            <hr class="featurette-divider">
                        @endif
                        <div class="row featurette">
                            <div class="col-md-7">
                                <h2 class="featurette-heading">{{ $vin->libelle }} <span class="dark-purple text-lowercase">{{ $vin->specificite }}</span></h2>
                                <p class="lead">{{ $vin->description }}</p>
                                <blockquote>
                                    <p>Taux Alcool : {{ $vin->tav }} %</p>
                                </blockquote>
                            </div>
                            <div class="col-md-5">
                                @if (!empty($vin->image))
                                <img class="featurette-image img-responsive" src="{{ URL::asset('images/uploads/originals/'.$vin->image) }}"></p>
                                @else
                                <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="500x500" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDUwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjE5MC4zMTI1IiB5PSIyNTAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MjNwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj41MDB4NTAwPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true">
                                @endif
                            </div>
                        </div>
                    @else
                        <hr class="featurette-divider">

                        <div class="row featurette">
                            <div class="col-md-5">
                                @if (!empty($vin->image))
                                <img class="featurette-image img-responsive" src="{{ URL::asset('images/uploads/originals/'.$vin->image) }}"></p>
                                @else
                                <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="500x500" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgdmlld0JveD0iMCAwIDUwMCA1MDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iNTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjE5MC4zMTI1IiB5PSIyNTAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MjNwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj41MDB4NTAwPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true">
                                @endif
                            </div>
                            <div class="col-md-7">
                                <h2 class="featurette-heading">{{ $vin->libelle }} <span class="dark-purple text-lowercase">{{ $vin->specificite }}</span></h2>
                                <p class="lead">{{ $vin->description }}</p>
                                <blockquote>
                                    <p>Taux Alcool : {{ $vin->tav }} %</p>
                                </blockquote>

                            </div>
                        </div>
                    @endif
                @endforeach
            @endif
        @endforeach
    </div>
</section>