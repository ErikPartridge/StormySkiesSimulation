<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Erik Partridge">
    <meta name="description" content="A multi-player simulation of the airline industry. Compete against your friends, and try to succeed in a cut-throat industry.">
    {{ HTML::style("css/main.css") }}
    <title>Takeoff Simulation</title>
</head>
<body>
    <div class = "top">
        <div class ="head-left">
            <b>Takeoff Simulation</b>
        </div>
        <div class="head-right">
            {{ Form::open(array('url' => '/home/button', 'method' => 'POST'))}}
                <input type="submit" class="main-button" value="Join" name = "join">
                <input type="submit" class="main-button" value="Login" name = "login">
                <input type="submit" class="main-button" value="FAQ" name = "faq">
                <input type="submit" class="main-button" value="Wiki" name = "wiki">
            {{ Form::close() }}
        </div>
    </div>
    
    <HR color="#3498DB"></HR>
    <img src="{{asset('images/core/a380.jpg')}}" alt="A380 lining up" width="100%" height="15%">
    <div id="bottom">
        <div id="left-bottom">
            <h3>Latest News</h3>
            <HR color="#3498DB"></HR>
            Just launched world: O'Hare! Come check it out now!
        </div>
        <div id="right-bottom">
            <h3>Worlds</h3>
            <HR color="#3498DB"></HR>

            {{$worlds}}

        </div>
    </div>
    <footer>
        <p></p>
        <HR color="#3498DB"></HR>
        <p>&copy Erik Malmstrom-Partridge 2014</p>
        <p>The banner image is by Joao Carlos Medau and is released under the <a href="https://creativecommons.org/licenses/by/2.0/">CC2.0</a>.</p>
        <p>{{HTML::link('/terms', 'Our Terms and Conditions')}}</p>
        <p>{{HTML::link('/privacy', 'Privacy Policy')}}</p>
    </footer>
</body>

</html>