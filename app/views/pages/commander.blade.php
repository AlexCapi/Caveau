@extends("layouts.layout")
@section("content")
<section class="header"></section>
<section id="commander" @if($commandeEnCours) style="display:none;" @endif >
    <div class="container">
        @if (!empty(Session::get('success')))

        <div class="alert alert-success">{{ Session::get('success') }}</div>

        @endif
        <div class="row">
            <div class="col-sm-8">
                <div class="row">
                    @foreach ($vins as $vin)
                    <div class="col-sm-3">
                        @if(!empty($vin->image))
                        <img onclick="ajoutVin({{ $vin->id }}, {{ $vin->prix }}, '{{ $vin->libelle }}', '{{ $vin->specificite }}')" class="img-responsive img-clickable" src="{{ URL::asset('images/uploads/originals/'.$vin->image) }}">
                        @else
                        <img onclick="ajoutVin({{ $vin->id }}, {{ $vin->prix }}, '{{ $vin->libelle }}', '{{ $vin->specificite }}')" class="img-clickable" src="http://placehold.it/165x220">
                        @endif
                        <h2 class="commande-heading">{{ $vin->libelle }}
                            @if (!empty($vin->specificite))
                            <br/><span class="dark-purple text-lowercase">{{ $vin->specificite }}</span>
                            @endif
                            <br/>{{ number_format($vin->prix, 2, '.', '') }} €
                        </h2>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-sm-4">
                <div class="selection">
                    <h5 class="title-selection">Ma sélection</h5>
                    <table id="vin-selection" class="table tab-vin-selection">
                        <tbody>
                            <tr id="vinSelectionEmpty">
                                <td><p>Aucun vin sélectionné</p></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="block-total">
                        <div class="row">
                            <div class="col-xs-7">
                                <p class="total">
                                    <strong>Total</strong> ( € )
                                </p>
                            </div>
                            <div class="col-xs-4">
                                <p class="price"></p>
                            </div>
                        </div>
                    </div>
                    <button id="btnCommander" onclick="commander()" class="btn btn-purple btn-commander" type="button" disabled="">Commander <i class="icon-caret-right"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="recapitulatif" @if(!$commandeEnCours) style="display:none;" @endif>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h5 class="title-selection">Formulaire</h5>
                <div class="form-commande">
                    @if (!empty($errors))
                    @foreach ($errors->all() as $message)
                    <div class="alert alert-danger">{{ $message }}</div>
                    @endforeach
                    @endif
                    {{ Form::open() }}
                    <div class="row">
                        <div class="col-sm-3">
                            {{ Form::label("civilite", "Civilite") }}<br/>
                            M.
                            {{ Form::radio('civilite', 'M') }}
                            Mlle.
                            {{ Form::radio('civilite', 'Mlle') }}
                            Mme.
                            {{ Form::radio('civilite', 'Mme') }}
                        </div>
                        <div class="col-sm-3">
                            {{ Form::label("nom", "Nom") }}
                            {{ Form::text("nom", null, array('class' => 'form-control')) }}
                        </div>
                        <div class="col-sm-3">
                            {{ Form::label("prenom", "Prenom") }}
                            {{ Form::text("prenom", null, array('class' => 'form-control')) }}
                        </div>
                        <div class="col-sm-3">
                            {{ Form::label("email", "Email") }}
                            {{ Form::text("email", null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            {{ Form::label("adresse", "Adresse") }}
                            {{ Form::text("adresse", null, array('class' => 'form-control')) }}
                        </div>
                        <div class="col-sm-3">
                            {{ Form::label("ville", "Ville") }}
                            {{ Form::text("ville", null, array('class' => 'form-control')) }}
                        </div>
                        <div class="col-sm-3">
                            {{ Form::label("cp", "Code Postal") }}
                            {{ Form::text("cp", null, array('class' => 'form-control')) }}
                        </div>
                        <div class="col-sm-3">
                            {{ Form::label("pays", "Pays") }}
                            {{ Form::text("pays", null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            {{ Form::label("message", "Message (facultatif)") }}
                            {{ Form::textarea("message", null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            {{ Form::captcha() }}
                        </div>
                        <div class="col-sm-6 text-right">
                            {{ Form::submit("Envoyer", array('class' => 'btn btn-purple', 'style' => 'margin-top:20px;')) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <p class="text-center">L'envoi de ce formulaire constitue une pré-commande. nous vous recontacterons ensuite dans les plus brefs délais afin de finaliser votre commande, majorée des frais d'expédition.<br/>
                            La commande sera expédié après réception d'un chèque.<br/>
                            Découvrez nos frais de transports ici : <a href="{{ URL::asset('documents/frais_transport.pdf') }}" target="_blank"> tarifs</a><br/>
                            Possibilitée de retrait de la commande sur place.<br/>
                            Pour tout renseignement veuillez nous appelez au 04 79 42 10 18
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="selection">
                    <h5 class="title-selection">Récapitulatif</h5>
                    <table id="vin-recapitulatif" class="table tab-vin-selection">
                        <tbody>

                        </tbody>
                    </table>
                    <div class="block-total-recap">
                        <div class="row">
                            <div class="col-xs-7">
                                <p class="total">
                                    <strong>Total</strong> ( € )
                                </p>
                            </div>
                            <div class="col-xs-4">
                                <p class="price"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="link-back-command" onclick="backToCommand()"><span class="glyphicon glyphicon-circle-arrow-left"></span> Retour à la commande</div>
            </div>
        </div>
    </div>
</section>
@if($commandeEnCours)
    <script type="application/javascript">
        window.onload = function(){
            initVins(<?php echo json_encode($sessionVins); ?>);
        };
    </script>
@endif
{{HTML::script('js/commande.js')}}