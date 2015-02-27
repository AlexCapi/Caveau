@extends("layouts.layout")
@section("content")

<!-- Bandeau
================================================== -->
<div class="bandeau brightness" style="background: url({{ URL::asset('images/header.jpg') }}) no-repeat center center; background-size: cover;"></div>
<!--
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    </ol>


    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="img-responsive brightness" src="{{ URL::asset('images/header.png') }}" style="height: 100%; width: 100%">
            <div class="carousel-caption">
                Caveau Quinard, Viticulteur Récoltant
            </div>
        </div>
        <div class="item">
            <img class="img-responsive brightness" src="{{ URL::asset('images/caveau.png') }}" style="height: 100%; width: 100%">
            <div class="carousel-caption">
                Notre caveau
            </div>
        </div>
    </div>

    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Précédent</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Suivant</span>
    </a>
</div>
-->

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">
    <div id="home">

        @if (!empty($actus))
        <div class="home-actus">
            <h2 class="home-actus-titre">Notre actualite</h2>
            @foreach ($actus as $index => $actu)
            @if ($index%2 == 0)
            <blockquote>
            @else
            <blockquote class="blockquote-reverse">
            @endif
            <p>{{ $actu->message }}</p>
            <footer>{{ $actu->titre }}</footer>
            </blockquote>
            @endforeach
        </div>
        @endif

        <!-- Three columns of text below the carousel -->
        <div class="row text-center">
            <div class="col-md-4">
                <span class="glyphicon glyphicon-glass icones-lg dark-purple" aria-hidden="true"></span>
                <h2 class="dark-purple">Des vins de qualités</h2>
                <p>Venez découvrir nos vins de qualités, qui ont façonné la réputation de notre caveau depuis des années et dont les différents crus seront vous surprendre par leur goût exceptionnel.</p>
                <p><a class="btn btn-default" href="{{ URL::to('vins') }}" role="button">Voir nos vins »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-md-4">
                <span class="icon-cart icones-lg dark-purple" aria-hidden="true"></span>
                <h2 class="dark-purple">Commander en ligne</h2>
                <p>Avec notre nouveau site web, commander votre vin depuis chez vous. Nous préparons votre commande et l'expédions dans les plus brefs délais, ou vous pouvez simplement passer la récupérer.</p>
                <p><a class="btn btn-default" href="{{ URL::to('commander') }}" role="button">Commander »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-md-4">
                <span class="icon-gift icones-lg dark-purple" aria-hidden="true"></span>
                <h2 class="dark-purple">De bonnes idées cadeaux</h2>
                <p>Le caveau Quinard vous propose des coffrets cadeaux, composés de nos meilleures bouteilles ainsi que de produits du terroir. Idéal pour offrir ! </p>
                <p><a class="btn btn-default" href="{{ URL::to('caveau') }}#cadeaux" role="button">Voir nos coffrets »</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading dark-purple"> Le Bugey, <span class="text-muted">une terre viticole de qualité</span></h2>
                <p class="lead">Situé sur la rive droite du rhône, au coeur du bassin Belleyssan, notre caveau se trouve sur la commune de Massignieu-de-rives.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive" alt="Image comptoir" src="{{ URL::asset('images/comptoir.jpg') }}" data-holder-rendered="true">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-5">
                <img class="featurette-image img-responsive" alt="Image champ" src="{{ URL::asset('images/caveau.png') }}" data-holder-rendered="true">
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading dark-purple">De génération <span class="text-muted">en génération.</span></h2>
                <p class="lead">Depuis quatres générations, notre famille perpétue la tradition viticole. D'abord en polyculture élevage avec Marius puis sa fille Denise, jusqu'au années 1965 avant de s'orienter exclusivement dans la viticulture avec l'installation de mon père Maurice, moi- même étant installé depuis janvier 2007.</p>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette last-featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading dark-purple">Des vins variés <span class="text-muted">et savoureux.</span></h2>
                <p class="lead">Nous produisons l'ensemble des vins du Bugey : Blanc, Rouge, méthode traditionnelle et ancestrale en agriculture biologique depuis notre reconversion en 2008.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive" alt="Image caveau" src="{{ URL::asset('images/vend.jpg') }}" data-holder-rendered="true">
            </div>
        </div>

        <!-- /END THE FEATURETTES -->
    </div>

</div><!-- /.container -->
@stop

