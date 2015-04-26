@extends("layouts.layout")
@section("content")
<section class="header"></section>
<section id="contact">
    <div class="container">
        @if (!empty(Session::get('success')))

            <div class="alert alert-success">{{ Session::get('success') }}</div>

        @endif
        <div class="row">
            <div class="col-md-6">
                <div class="row ligne-tuile">
                    <div class="col-md-12">
                        <div class="tuile-contact">
                            <span class="icone glyphicon glyphicon-envelope"></span>
                            <hr class="contact-divider">
                            <address>
                                <strong>Caveau QUINARD</strong><br>
                                201 route du Lit au roi<br>
                                01300, Massignieu de Rives<br>
                            </address>
                            <iframe class="featurette-map img-responsive" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.fr/maps?q=caveau+quinard&amp;ie=UTF8&amp;hl=fr&amp;hq=caveau+quinard&amp;hnear=Bonneville,+Haute-Savoie,+Rh%C3%B4ne-Alpes&amp;t=m&amp;ll=46.17983,5.08667&amp;spn=1.673524,3.999023&amp;z=7&amp;iwloc=A&amp;output=embed"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="tuile-contact form">
                            <span class="icone glyphicon glyphicon-list-alt"></span>
                            <hr class="contact-divider">
                            <div class="row">
                                <div class="col-md-12">
                                    @if (!empty($errors))
                                    @foreach ($errors->all() as $message)
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @endforeach
                                    @endif
                                    {{ Form::open() }}
                                    <div class="row">
                                        <div class="col-xs-3">
                                            {{ Form::label("nom", "Nom") }}
                                        </div>
                                        <div class="col-xs-9">
                                            {{ Form::text("nom", null, array('class' => 'form-control')) }}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-3">
                                            {{ Form::label("email", "Email") }}
                                        </div>
                                        <div class="col-xs-9">
                                            {{ Form::text("email", null, array('class' => 'form-control')) }}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-3">
                                            {{ Form::label("objet", "Objet") }}
                                        </div>
                                        <div class="col-xs-9">
                                            {{ Form::text("objet", null, array('class' => 'form-control')) }}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-3">
                                            {{ Form::label("message", "Message") }}
                                        </div>
                                        <div class="col-xs-9">
                                            {{ Form::textarea("message", null, array('class' => 'form-control')) }}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-9">
                                            {{ Form::captcha() }}
                                        </div>
                                        <div class="col-sm-3 text-right">
                                            {{ Form::submit("Envoyer", array('class' => 'btn btn-purple', 'style' => 'margin-top:20px;')) }}
                                        </div>
                                    </div>
                                    {{ Form::close() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row ligne-tuile">
                    <div class="col-md-12">
                        <div class="tuile-contact">
                            <span class="icone glyphicon glyphicon-calendar"></span>
                            <hr class="contact-divider">
                            <blockquote>
                                Ouverture du lundi au vendredi : de 9h30 à 12h et de 14h30 à 18h (en été jusqu'à 19h)<br/>
                                Le samedi de 10h à 12h et de 15h à 18h.<br/>
                                Le dimanche sur rendez-vous uniquement.<br/>
                                Possibilité de prendre rendez-vous en dehors de ces plages horaires.
                            </blockquote>
                        </div>
                    </div>
                </div>
                <div class="row ligne-tuile">
                    <div class="col-md-12">
                        <div class="tuile-contact">
                            <span class="icone glyphicon glyphicon-earphone"></span>
                            <p class="centered">04 79 42 10 18</p>
                            <span class="icone icone-mail">@</span>
                            <p>
                                <a href="mailto:caveauquinard@orange.fr">caveauquinard@orange.fr</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row ligne-tuile">
                    <div class="col-md-12">
                        <div class="tuile-contact">
                            <span class="icone-fb glyphicon glyphicon-thumbs-up"></span>
                            <hr class="contact-divider">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="fb-like-box" data-href="https://www.facebook.com/pages/Caveau-Quinard/262742030464209" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="false"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop