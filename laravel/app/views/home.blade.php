<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Erik Partridge">
    <meta name="description" content="A multi-player simulation of the airline industry. Compete against your friends, and try to succeed in a cut-throat industry.">
    {{ HTML::style("css/main.css") }}
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
                <input type="submit" class="main-button" value="Forums" name = "forums">
                <input type="submit" class="main-button" value="Wiki" name="wiki">
            {{ Form::close() }}
        </div>
    </div>
    <hr>
    <h2 style="text-align:center; color:#0086B2;">Why TakeoffSim?</h2>
    <div class="grid-container" id="top-middle">
        <div class="grid-50">
            <div class="grid-30">
                {{HTML::image('images/icons/multiplayer.svg', "Community", array('width' => '80%'))}}
            </div>
            <div class="grid-70 push-multiplayer">
                <a href="http://forums.takeoffsim.com"><em style="font-size:1.7em">Community</em></a>
                <p>I listen to the community for any input they have</p>
            </div>
        </div>
        <div class="grid-50">
            <div class="grid-30">
                {{HTML::image('images/icons/dynamic.svg', "Dynamic", array('width' => '80%'))}}
            </div>
            <div class="grid-70">
                <a href="/features"><em style="font-size:1.7em">Dynamic</em></a>
                <p>TakeoffSim doesn't have a formula to win-- both user decisions and the dynamic AI engine create a unique challenge each time.</p>
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
                {{HTML::image('images/icons/exclamation.svg', "Notified", array('width' => '80%'))}}
            </div>
            <div class="grid-70">
                <em style="font-size:1.7em">Be Notified</em>
                <p>TakeoffSim is releasing soon for Windows, Mac, and Linux! Sign up below for more information and early access when it's ready!</p>
            </div>
        </div>
    </div>
    <div class="grid-container">
        {{ Form::open(array('url' => '/home/button', 'method' => 'POST'))}}
        <div class="grid-30" style="border:solid #FF8200 2px;">
            <input type="text" class="name" value="your name here" id="name" name = "name" style="width:100%; height: 10px;">
        </div>
        <div class="grid-50" style="border:solid #FF8200 2px;">
            <input type="text" class="email" value="your email here" id="email" name = "email" style="width:100%; height:10px;">
        </div>
        <div class="grid-20" style="border:solid #FF8200 2px;">
            <input type="submit" class="main-button" value="submit" style="width:100%;">
        </div>
        <div class="grid-100">
            <p>This information is used in accordance to our {{HTML::link('/privacy', 'privacy policy')}} and {{HTML::link('/terms', 'our terms and conditions')}}</p>
        </div>
    {{ Form::close() }}
    </div>
    <hr>
    <footer>
        <p>&copy <a href="mailto:erikdevelopments@gmail.com">Erik Malmstrom-Partridge</a> 2014</p>
        <p>{{HTML::link('/terms', 'Our Terms and Conditions')}}   {{HTML::link('/privacy', 'Privacy Policy')}}</p>
    </footer>
    <!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//piwik.takeoffsim.com/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//piwik.takeoffsim.com/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

</body>

</html>