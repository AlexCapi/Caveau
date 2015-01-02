@extends("layouts.layout")
@section("content")
<section class="header"></section>
<section id="actualites">
    <div class="container marketing">

        @if (!empty($actus))
        @foreach ($actus as $actu)
        <div class="alert alert-danger" >
            {{ $actu->titre }} : {{ $actu->message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endforeach
        @endif

        <div class="row">
            <div class="col-xs-12">
                <div class="section-title">
                    <h1><span class="glyphicon glyphicon-star"></span><br> Récompenses</h1>
                    <p class="section-description">Jetez un oeil à l'ensemble des récompenses remportées par nos vins.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="recompenses">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Catégorie</th>
                                <th>Vin</th>
                                <th>Millésime</th>
                                <th>Année</th>
                                <th>Sélection</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($recompenses as $rec)
                                <tr>
                                    <td>{{ $rec->categorie_libelle }}</td>
                                    <td>{{ $rec->vin_libelle }} {{ $rec->specificite }}</td>
                                    <td>{{ $rec->millesime }}</td>
                                    <td>{{ $rec->annee }}</td>
                                    <td>{{ $rec->selection }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h1><span class="glyphicon glyphicon-book"></span><br>Articles de presse</h1>
                    <p class="section-description">Consulter les articles de presse spécialement sélectionné pour vous par nos soins.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($documents as $doc)
                    <tr>
                        <td>{{ $doc->titre }}</td>
                        <td>
                            <a target="_blank" class="btn btn-purple" href="{{ URL::asset('documents/'.$doc->fichier) }}">Voir</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>