<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Erik Malmstrom-Partridge">
    {{ HTML::script('js/jquery.min.js') }}
    {{ HTML::script('js/buttons.js')}}
    {{ HTML::style('css/unsemantic.css')}}
    {{ HTML::style("css/buttons.css")}}
    {{ HTML::style("css/backend.css") }}
    <title>Takeoff Simulation</title>
    <link rel="shortcut icon" href="/images/TS.png">
    @yield('head-details')
</head>
<body>
    <div class="grid-25">
        <a href="/"><h1 style="color:#FF8200;display:inline-block;font-size:2.1em; font-family:&#34;Avenir&#34;,arial,sans-serif; margin-top: 0px;"><b>Takeoff<span style="color:#00BFFF">Sim</b></span></h1></a>
    </div>
    <div class="grid-75" style="display:inline-block">
    {{HTML::link("/backend/overview", "Worlds", array('class' => 'button button-flat'))}}
    {{HTML::link("/backend/world_overview", "Overview", array('class' => 'button button-flat'))}}
    {{HTML::link("/backend/corporate", "Corporate", array('class' => 'button button-flat'))}}
    <span class="button-dropdown" data-buttons="dropdown">
        <a href="#" class="button button-rounded">Aircraft<i class="fa fa-caret-down"></i></a>
        <ul style="display: none;">
            <li>{{HTML::link('backend/new_aircraft', "New Aircraft", array())}}</li>
            <li>{{HTML::link('backend/used_aircraft', "Used Aircraft", array())}}</li>
            <li>{{HTML::link('backend/my_fleet', "Fleet", array())}}</li>
        </ul>
        <div style="position: fixed; top: 0px; left: 0px; right: 0px; bottom: 0px; z-index: 999; display: none;"></div>
    </span>
    <span class="button-dropdown" data-buttons="dropdown">
        <a href="#" class="button button-rounded">Flights<i class="fa fa-caret-down"></i></a>
        <ul style="display: none;">
            <li>{{HTML::link("backend/routes", "Routes", array())}}</li>
            <li>{{HTML::link("backend/schedules", "Flight Schedule", array())}}</li>
        </ul>
        <div style="position: fixed; top: 0px; left: 0px; right: 0px; bottom: 0px; z-index: 999; display: none;"></div>
    </span>
    <span class="button-dropdown" data-buttons="dropdown">
        <a href="#" class="button button-rounded">Airports<i class="fa fa-caret-down"></i></a>
        <ul style="display: none;">
                <li>{{HTML::link("backend/airports", "Airports", array())}}</li>
                <li>{{HTML::link('backend/gates', "Gates", array())}}</li>
                <li>{{HTML::link('backend/slots', "Slots", array())}}</li>
        </ul>
        <div style="position: fixed; top: 0px; left: 0px; right: 0px; bottom: 0px; z-index: 999; display: none;"></div>
    </span>
    {{HTML::link("/user/settings", "Settings", array('class' => 'button button-flat'))}}
    </div>
    @yield('content')
</body>

</html>