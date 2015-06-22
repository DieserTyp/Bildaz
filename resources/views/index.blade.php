<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>Willkommen bei Bildaz</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Bildaz</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Startseite</a></li>
                    </ul>
                        @if (Auth::guest())
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{ url('/auth/login') }}">Login</a></li>
                            <li><a href="{{ url('/auth/register') }}">Register</a></li>
                        </ul>
                        @else
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{url('/pages/upload')}}">Upload Bildaz</a></li>
                            <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                            <p class="navbar-text navbar-right">Hi {{Auth::user()->name}}!</p>
                        </ul>
                        @endif
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row" style="position: relative;height: 160px;">
                <div class="col-md-3"><img src="" alt="Bild1"/></div>
                <div class="col-md-3"><img src="" alt="Bild2"/></div>
                <div class="col-md-3"><img src="" alt="Bild3"/></div>
                <div class="col-md-3"><img src="" alt="Bild4"/></div>
            </div>
            <div class="row" style="position: relative;height: 160px;">
                <div class="col-md-3"><img src="" alt="Bild5"/></div>
                <div class="col-md-3"><img src="" alt="Bild6"/></div>
                <div class="col-md-3"><img src="" alt="Bild7"/></div>
                <div class="col-md-3"><img src="" alt="Bild8"/></div>
            </div>
            <div class="row" style="position: relative;height: 160px;">
                <div class="col-md-3"><img src="" alt="Bild9"/></div>
                <div class="col-md-3"><img src="" alt="Bild10"/></div>
                <div class="col-md-3"><img src="" alt="Bild11"/></div>
                <div class="col-md-3"><img src="" alt="Bild12"/></div>
            </div>
            <div class="row" style="position: relative;height: 160px;">
                <div class="col-md-3"><img src="" alt="Bild13"/></div>
                <div class="col-md-3"><img src="" alt="Bild14"/></div>
                <div class="col-md-3"><img src="" alt="Bild15"/></div>
                <div class="col-md-3"><img src="" alt="Bild16"/></div>
            </div>
        </div>
    </body>
</html>