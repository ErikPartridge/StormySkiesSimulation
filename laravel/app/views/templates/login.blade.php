<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Erik Malmstrom-Partridge">
    {{ HTML::style("css/login.css") }}
    {{HTML::script("js/jquery.min.js")}}
    {{HTML::script("js/jquery.validate.min.js")}}
    <title>Takeoff Sim</title>

    @yield('head-details')
</head>
<body>
    @yield('content')
</body>

</html>