@section("header")
<!-- NAVBAR
================================================== -->
<div class="navbar-wrapper">
    <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ URL::route('/') }}">Caveau Quinard</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li {{{ (Request::is('/') ? 'class=active' : '') }}}><a href="{{ URL::route('/') }}">Accueil</a></li>
                        <li><a href="#about">Commander</a></li>
                        <li {{{ (Request::is('vins') ? 'class=active' : '') }}}><a href="{{ URL::to('vins') }}">Nos Vins</a></li>
                        <li><a href="#contact">Caveau</a></li>
                        <li><a href="#contact">Recettes</a></li>
                        <li {{{ (Request::is('contact') ? 'class=active' : '') }}}><a href="{{ URL::to('contact') }}">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @if (Auth::check())
                        <li><a href="{{ URL::route("user/logout") }}">Déconnexion</a></li>
                        @endif
                        <li><a href="{{ URL::to("admin") }}">Administration</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
@show