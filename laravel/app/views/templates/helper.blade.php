<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Erik Malmstrom-Partridge">
    {{ HTML::style("css/main.css") }}
    {{ HTML::script('js/jquery-2.1.1.min.js') }}
    <link rel="shortcut icon" href="images/TS.png">
    <title>Takeoff Simulation</title>
    @yield('head-details')
</head>
<body>
    @yield('content')

</body>
<footer>
    <hr>
    {{HTML::link('/', 'Home', array())}}&nbsp&nbsp{{HTML::link('/user/register', 'Register', array('style=display:inline-block;'))}}&nbsp&nbsp{{HTML::link('/user/login', 'Login', array('style=display:inline-block;'))}}
    <br>&copy <a href="mailto:admin@takeoffsim.com">Erik Malmstrom-Partridge</a> 2014
</footer>
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://piwik.takeoffsim.com/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
    g.defer=true; g.async=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="http://piwik.takeoffsim.com/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
</html>