<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Erik Partridge">
    <meta name="description" content="A multi-player simulation of the airline industry. Compete against your friends, and try to succeed in a cut-throat industry.">
    {{ HTML::style("css/main.css") }}
    {{ HTML::script('js/fullpage.min.js')}}
    {{ HTML::style("css/unsemantic.css")}}
    <link rel="shortcut icon" href="images/TS.png">
    <title>Takeoff Simulation</title>
</head>
<body>
    <div class = "grid-container" id="top">
        <div class ="grid-40" style="border:none;">
            <h1 style="color:#FF8200;display:inline-block;font-size:2.1em; margin-top: 0px;"><b>Takeoff<span style="color:#00BFFF">Sim</b></span></h1>
        </div>
        <div class="grid-60" style="border:none;">
            {{ Form::open(array('url' => '/home/button', 'method' => 'POST'))}}
                <input type="submit" class="main-button" value="Join" name = "join">
                <input type="submit" class="main-button" value="Login" name = "login">
                <input type="submit" class="main-button" value="Forums" name = "forums">
                <input type="submit" class="main-button" value="Wiki" name="wiki">
            {{ Form::close() }}
        </div>
    </div>
    <hr>
    <h2 style="text-align:center; color:#0086B2;">Why Try TakeoffSim?</h2>
    <div class="grid-container" id="top-middle">
        <div class="grid-50">
            <div class="grid-30">
                {{HTML::image('images/icons/multiplayer.svg', "Multiplayer", array('width' => '80%'))}}
            </div>
            <div class="grid-70 push-multiplayer">
                <a href="http://forums.takeoffsim.com"><em style="font-size:1.7em">Multiplayer</em></a>
                <p>With TakeoffSim, you can compete against other people, certainly better than any AI, in a friendly, competitive environment for all skill levels.</p>
            </div>
        </div>
        <div class="grid-50">
            <div class="grid-30">
                {{HTML::image('images/icons/dynamic.svg', "Dynamic", array('width' => '80%'))}}
            </div>
            <div class="grid-70">
                <a href="/features"><em style="font-size:1.7em">Dynamic</em></a>
                <p>TakeoffSim doesn't have a formula to win. Like the real world, each player's decision affects the game, meaning no world will ever be the same.</p>
            </div>
        </div>
    </div>
    <div class="grid-container" id="top-middle">
        <div class="grid-50">
            <div class="grid-30">
                {{HTML::image('images/icons/human.svg', "Human", array('width' => '80%'))}}
            </div>
            <div class="grid-70 push-multiplayer">
                <a href="/about"><em style="font-size:1.7em">Human</em></a>
                <p>Ever feel like you only interact with big companies who don't care? In that case, Hi! I'm Erik. I'm a human being, and I do everything here.</p>
            </div>
        </div>
        <div class="grid-50">
            <div class="grid-30">
                {{HTML::image('images/icons/fun.svg', "Fun", array('width' => '80%'))}}
            </div>
            <div class="grid-70">
                <a href="/fun"><em style="font-size:1.7em">Fun</em></a>
                <p>In the end, TakeoffSim is a bunch of things, but most of all, I try to ensure it is fun. Just because life isn't always fun, doesn't mean we can't try.</p>
            </div>
        </div>
    </div>
    <div class="grid-container" id="top-middle">
        <div class="grid-50">
            <div class="grid-30">
                {{HTML::image('images/icons/learn.svg', "Learn", array('width' => '80%'))}}
            </div>
            <div class="grid-70 push-multiplayer">
                <a href="/educational"><em style="font-size:1.7em">Learn</em></a>
                <p>Feel that need to be productive? I understand. TakeoffSim can help prepare you for starting your own business, and teach you about money.</p>
            </div>
        </div>
        <div class="grid-50">
            <div class="grid-30">
                {{HTML::image('images/icons/money.svg', "Money", array('width' => '80%'))}}
            </div>
            <div class="grid-70">
                <a href="/pricing"><em style="font-size:1.7em">Affordable</em></a>
                <p>Because I'm a human being, I have to get paid somehow. But I try to keep prices low, just a few quarters a month.</p>
            </div>
        </div>
    </div>
    <div class="grid-container">
        {{ Form::open(array('url' => '/home/button', 'method' => 'POST'))}}
        <div class="grid-50" style="border:none;">
            <input type="submit" class="main-button" value="Join Today!" id="bigbutton" name = "join" style="width:100%;">
        </div>
        <div class="grid-50" style="border:none;">
            <input type="submit" class="main-button" value="Learn More!" id="bigbutton" name = "more" style="width:100%;">
        </div>
    {{ Form::close() }}
    </div>
    <hr>
    <footer>
        <p>&copy <a href="mailto:admin@takeoffsim.com">Erik Malmstrom-Partridge</a> 2014</p>
        <p>{{HTML::link('/terms', 'Our Terms and Conditions')}}   {{HTML::link('/privacy', 'Privacy Policy')}}</p>
    </footer>
</body>

</html>