@extends("layouts.layout")
@section("content")
<section class="header"></section>
<section id="caveau">
    <div class="row" id="header">
        <div class="col-xs-12">
            <div class="section-title">
                <h1>Découvrez notre caveau</h1>
                <p class="section-description">Venez nous rendre visite afin de visiter notre caveau et découvrir nos meilleurs produits locaux</p>
            </div>
        </div>
    </div>

    <div class="container marketing">

        <div class="row featurette">
            <div class="col-md-5">
                <img class="featurette-image img-responsive" alt="Image champ" src="{{ URL::asset('images/terroir.jpg') }}" data-holder-rendered="true">
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading dark-purple">Vente de produits <span class="text-muted">du terroir.</span></h2>
                <p class="lead">Des sirops, coulis, confitures, en passant par le miel et les escargots, beaucoup d'excellent produits locaux sont en vente dans notre caveau.</p>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading dark-purple"> Découvrez notre caveau. <span class="text-muted">Nous vous réservons quelques surprises.</span></h2>
                <p class="lead">Réception guidée en trois langues : français, hollandais et anglais. Produits du terroir. Personnalisation d'étiquettes.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-responsive" style="margin-top: 80px;" alt="Image comptoir" src="{{ URL::asset('images/interieur-caveau.jpg') }}" data-holder-rendered="true">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row">
            <div class="col-xs-12">
                <div id="cadeaux" class="section-title">
                    <h1>Des idées cadeaux pour toutes occasions</h1>
                    <p class="section-description">Nous confectionnons avec soins de délicieux paniers garnis de nos meilleurs vins et produits du terroir.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <img class="image-coffret img-responsive" src="{{ URL::asset('images/coffret.jpg') }}">
                </div>
                <div class="col-sm-4">
                    <img class="image-coffret img-responsive" src="{{ URL::asset('images/coffret2.jpg') }}">
                </div>
                <div class="col-sm-4">
                    <img class="image-coffret img-responsive" src="{{ URL::asset('images/coffret3.jpg') }}">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <img class="image-coffret img-responsive" src="{{ URL::asset('images/coffret4.jpg') }}">
                </div>
                <div class="col-sm-4">
                    <img class="image-coffret img-responsive" src="{{ URL::asset('images/coffret5.jpg') }}">
                </div>
                <div class="col-sm-4">
                    <img class="image-coffret img-responsive" src="{{ URL::asset('images/coffret8.jpg') }}">
                </div>
            </div>
        </div>
    </div>
</section>