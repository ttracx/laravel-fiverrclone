<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Fiverr Clone</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <script src="{{asset('js/app.js')}}"></script>

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">
                    <img src="{% static 'img/logo.jpg' %}" height="23">
                </a>
            </div>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" style="padding-right: 200px" class="form-control" placeholder="Find services">
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                           role="button" aria-haspopup="true" aria-expanded="false">
                            Sell & Buy
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="">My Sellings</a></li>
                            <li><a href="">My Buyings</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                           role="button" aria-haspopup="true" aria-expanded="false">
                            user <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="">Create a gig</a></li>
                            <li><a href="">My Gigs</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="">My Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="">Logout</a></li>
                        </ul>
                    </li>
                @else
                    <li>
                        <a href="">Login</a>
                    </li>
                    <li>
                        <a href="">Register</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
    <div id="category">
        <div class="container">
            <ul class="nav navbar-nav">
                <li><a href="">Graphics & Design</a></li>
                <li><a href="">Digital Marketing</a></li>
                <li><a href="">Video & Animation</a></li>
                <li><a href="">Music & Audio</a></li>
                <li><a href="">Programming & Tech</a></li>
            </ul>
        </div>
    </div>
</nav>
<div id="body">
    <div class="container">
        @yield('content')
    </div>
</div>

<footer id="footer">
    <div class="container">
        <span>Fiverr clone &copy; 2017</span>
    </div>
</footer>
</body>
</html>