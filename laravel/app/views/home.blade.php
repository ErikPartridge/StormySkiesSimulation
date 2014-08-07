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
            {{ Form::close() }}
        </div>
    </div>
    
    <hr>
    <img src="{{asset('images/core/a380.jpg')}}" alt="A380 lining up" width="100%" height="15%">
    <div id="bottom">
        <div id="left-bottom">
            <h3>Latest News</h3>
            <hr>
            <uL>
                <li>Just launched world: O'Hare! Come check it out now!</li>
                <li>Just launched world: De Gaulle! Check it out!</li>
                <li>Founded takeoffsim.com, with world Logan! Try today!</li>
            </uL>
        </div>
        <div id="right-bottom">
            <h3>Worlds</h3>
            <hr>
            <table>
            <tr>
                <th>Name</th><th>Users</th><th>Max Users</th><th>In-Game Time</th>
            </tr>
            @foreach($worlds as $p)
            <tr>
                <?PHP $carbon = new Carbon\Carbon($p->current_time,'UTC') ?>
                <td>{{$p->name}}</td><td>{{count($p->hasMany('Airline'))}}</td><td>{{$p->cap}}</td><td>{{$carbon->toFormattedDateString()}}</td> 
            </tr>
            @endforeach
            </table>
        </div>
    </div>
    <footer>
        <p></p>
        <hr>
        <p>&copy; Erik Malmstrom-Partridge 2014</p>
        <p>The banner image is by Joao Carlos Medau and is released under the <a href="https://creativecommons.org/licenses/by/2.0/">CC2.0</a>.</p>
        <p>{{HTML::link('/terms', 'Our Terms and Conditions')}}</p>
        <p>{{HTML::link('/privacy', 'Privacy Policy')}}</p>
    </footer>
</body>

</html>