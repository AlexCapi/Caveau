@extends("layouts.layout")
@section("content")
<section class="header"></section>
<section id="caveau">
    <div class="container marketing">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title">
                    <h1>Visite du caveau</h1>
                    <p class="section-description">Consulter les fiches détaillés de nos vins. Et si vous vous laisser séduire, vous pouvez même commander en ligne.</p>
                </div>
            </div>
        </div>
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <span class="glyphicon glyphicon-glass icones-lg dark-purple" aria-hidden="true"></span>
                <h2 class="dark-purple">Des vins de qualités</h2>
                <p>Venez découvrir nos vins de qualités, qui ont façonné la réputation de notre caveau depuis des années et dont les différents crus seront vous surprendre par leur goût exceptionnel.</p>
                <p><a class="btn btn-default" href="{{ URL::to('vins') }}" role="button">Voir nos vins »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <span class="glyphicon glyphicon-shopping-cart icones-lg dark-purple" aria-hidden="true"></span>
                <h2 class="dark-purple">Commander en ligne</h2>
                <p>Avec notre nouveau site web, commander votre vin depuis chez vous. Nous préparons votre commande et vous n'avez plus qu'à passer la récupérer.</p>
                <p><a class="btn btn-default" href="#" role="button">Commander »</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <span class="glyphicon glyphicon-gift icones-lg dark-purple" aria-hidden="true"></span>
                <h2 class="dark-purple">De bonnes idées cadeaux</h2>
                <p>Le caveau Quinard vous propose des coffrets cadeaux, composés de nos meilleures bouteilles ainsi que de produits du terroir. Idéal pour offrir ! </p>
                <p><a class="btn btn-default" href="{{ URL::to('caveau') }}" role="button">Voir nos coffrets »</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

        <div class="row">
            <div class="col-xs-12">
                <div class="section-title">
                    <h1>Vente de produits du terroir</h1>
                    <p class="section-description">Consulter les fiches détaillés de nos vins. Et si vous vous laisser séduire, vous pouvez même commander en ligne.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="section-title">
                    <h1>Des coffrets cadeaux pour tous les goûts</h1>
                    <p class="section-description">Consulter les fiches détaillés de nos vins. Et si vous vous laisser séduire, vous pouvez même commander en ligne.</p>
                </div>
            </div>
        </div>
    </div>
</section>