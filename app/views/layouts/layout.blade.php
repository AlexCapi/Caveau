<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">
        <link href="{{ URL::asset('css/layout.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('bower/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('bower/lightgallery/light-gallery/css/lightGallery.css') }}" rel="stylesheet">
        <link rel="shortcut icon" href="http://www.caveauquinard.fr/images/favicons/favicon.ico" type="image/x-icon">
        <link rel="icon" href="http://www.caveauquinard.fr/images/favicons/favicon.png" type="image/png">
        <link rel="icon" sizes="32x32" href="http://www.caveauquinard.fr/images/favicons/favicon-32.png" type="image/png">
        <link rel="icon" sizes="64x64" href="http://www.caveauquinard.fr/images/favicons/favicon-64.png" type="image/png">
        <link rel="icon" sizes="96x96" href="http://www.caveauquinard.fr/images/favicons/favicon-96.png" type="image/png">
    </head>
    <body>

    <div id="fb-root"></div>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&appId=706044232847901&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-60178486-1', 'auto');
      ga('send', 'pageview');

    </script>
    <!--[if lte IE 9]>
        <p class="obsolete">Votre navigateur est <strong>obsolète</strong>, la sécurité et la navigabilité ne sont plus garanties. Nous vous recommandons de <a href="http://browsehappy.com/">mettre à jour au plus vite en cliquant ici </a>.</p>
    <![endif]-->

        @include("layouts.header")
        @if (isset($error))
        <div class="container">
            <div class="alert alert-danger">{{ $error }}</div>
        </div>
        @endif
        @if (isset($success))
        <div class="container">
            <div class="alert alert-success">{{ $success }}</div>
        </div>
        @endif

        @yield("content")

        @include("layouts.footer")
    </body>

    {{HTML::script('bower/jquery/dist/jquery.min.js')}}
    {{HTML::script('bower/bootstrap/dist/js/bootstrap.min.js')}}
    {{HTML::script('js/navbar.js')}}
    {{HTML::script('bower/lightgallery/light-gallery/js/lightGallery.min.js')}}

    @yield('scripts')

</html>