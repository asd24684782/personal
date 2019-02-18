<html>
<head>
    <link rel="stylesheet" href="{{URL::asset('css/home.css')}}">
    <title>home</title>
</head>
<body>
    <div class="head">
        <div class="homebutton">
            <a href="/"><img src="80.jpg" class="titleimg"/></a>
        </div>
        <nav>
            <ul>
                <li><a href="/img" style=text-decoration:none;>image</a></li>
                <li><a href="/poem" style=text-decoration:none;>poem</a></li>
                <li><a href="/" style=text-decoration:none;>home</a></li>
            </ul>
        </nav>
    </div>

    <div class="body">
        @yield('content')
    </div>

    <div class="footer">底標</div>
</body>
</html>