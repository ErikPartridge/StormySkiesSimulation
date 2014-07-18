<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Erik Malmstrom-Partridge">
    {{ HTML::style("css/framework/style.css") }}
    <title>Stormy Skies Simulation</title>

    @yield('head-details')
</head>
<body>
    <div class="main-menu">
        <ul class="menu vertical">
            <li>{{HTML::link("backend/corporate", "Corporate", array())}}</li>
            <li>{{HTML::link("backend/overview", "Overview", array())}}</li>
            <li>{{HTML::link("backend/aircraft", "Aircraft", array())}}
                <li>{{HTML::link('backend/my_fleet', "Fleet", array())}}</li>
                <li>{{HTML::link('backend/lease_aircraft', "Lease", array())}}</li>
                <li>{{HTML::link('backend/used_aircraft', "Used Aircraft", array())}}</li>
                <li>{{HTML::link('backend/new_aircraft', "New Aircraft", array())}}</li>
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
            <li>{{HTML::link("/", "Back", array())}}</li>
        </ul>
    </div>
    @yield('content')
</body>

</html>