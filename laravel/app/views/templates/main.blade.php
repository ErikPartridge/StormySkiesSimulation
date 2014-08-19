<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Erik Malmstrom-Partridge">
    {{ HTML::style("css/backend.css") }}
    {{ HTML::script('js/jquery.min.js') }}
    {{ HTML::script('js/dropit.js')}}
    {{ HTML::style("css/dropit.css")}}
    <title>Takeoff Simulation</title>

    @yield('head-details')
</head>
<body>

    {{HTML::link('/', "Takeoff Simulation", array("id" => 'headlink'))}}
    <div class="main-menu">
        <ul class="menu">
            <li>{{HTML::link("backend/overview", "Overview", array())}}</li>
            <li>{{HTML::link("backend/corporate", "Corporate", array())}}</li>
            <li>{{HTML::link("backend/aircraft", "Aircraft", array())}}
               <ul>
                    <li>{{HTML::link('backend/my_fleet', "Fleet", array())}}</li>
                    <li>{{HTML::link('backend/used_aircraft', "Used Aircraft", array())}}</li>
                    <li>{{HTML::link('backend/new_aircraft', "New Aircraft", array())}}</li>
                </ul>
            </li>
            <li>{{HTML::link("backend/routes", "Routes", array())}}
            </li>
            <li>{{HTML::link("backend/airports", "Airports", array())}}
                <ul>
                    <li>{{HTML::link('backend/gates', "Gates", array())}}</li>
                    <li>{{HTML::link('backend/slots', "Slots", array())}}</li>
                </ul>
            </li>
            <li>{{HTML::link("user/logoff", "Log Out", array())}}</li>
        </ul>
    </div>
    @yield('content')

    <script>
    (function(){
        $('.menu').dropit();    
    })(jQuery)
    </script>
</body>

</html>