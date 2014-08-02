<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Erik Malmstrom-Partridge">
    {{ HTML::style("css/backend.css") }}
    {{ HTML::script('js/jquery-2.1.1.min.js') }}
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
                <ul>
                    <li>{{HTML::link('backend/create_route', "Create Route", array())}}</li>
                    <li>{{HTML::link('backend/edit_routes', "Edit Routes", array())}}</li>
                    <li>{{HTML::link('backend/research_routes', "Research Route", array())}}</li>
                </ul>
            </li>
            <li>{{HTML::link("backend/airports", "Airports", array())}}
                <ul>
                    <li>{{HTML::link('backend/gates', "Gates", array())}}</li>
                    <li>{{HTML::link('backend/slots', "Slots", array())}}</li>
                </ul>
            </li>
            <li>{{HTML::link("backend/global", "World", array())}}</li>
        </ul>
    </div>
    @yield('content')
</body>

</html>