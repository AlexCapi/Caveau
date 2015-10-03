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
                    <a class="navbar-brand {{{ (Request::is('/') ? 'active' : '') }}}" href="{{ URL::route('/') }}">Caveau Quinard</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li {{{ (Request::is('/') ? 'class=active' : '') }}}><a href="{{ URL::route('/') }}">Accueil</a></li>
                        <li {{{ (Request::is('commander') ? 'class=active' : '') }}}><a href="{{ URL::to('commander') }}">Commander</a></li>
                        <li {{{ (Request::is('vins') ? 'class=active' : '') }}}><a href="{{ URL::to('vins') }}">Nos Vins</a></li>
                        <li {{{ (Request::is('actualites') ? 'class=active' : '') }}}><a href="{{ URL::to('actualites') }}">Actualités</a></li>
                        <li class="dropdown {{ Request::is('caveau') || Request::is('diaporama') ? 'active' : '' }}">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Caveau <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li {{{ (Request::is('caveau') ? 'class=active' : '') }}}><a href="{{ URL::to('caveau') }}">A propos</a></li>
                                <li {{{ (Request::is('diaporama') ? 'class=active' : '') }}}><a href="{{ URL::to('diaporama') }}">Diaporama</a></li>
                                <li {{{ (Request::is('mentions') ? 'class=active' : '') }}}><a href="{{ URL::to('mentions') }}">Mentions Légales</a></li>
                            </ul>
                        </li>
                        <li {{{ (Request::is('contact') ? 'class=active' : '') }}}><a href="{{ URL::to('contact') }}">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="facebook"><a target="_blank" href="https://www.facebook.com/pages/Caveau-Quinard/262742030464209">Facebook</a></li>
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
{{HTML::script('js/general.js')}}
@show