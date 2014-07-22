<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Erik Partridge">
    <meta name="description" content="A Simulation of the Airline Industry">
    {{ HTML::style("css/main.css") }}

    <title>Takeoff Simulation</title>

</head>
<body>
    <div class="head-right">{{HTML::link("/user/login", "Login", array())}}  {{HTML::link("/user/register", "Sign up", array())}}</div>
    <h2 style="color: deepskyblue">Takeoff Simulation</h2>
    <h4>Run the airline of your dreams</h4>
    <img src={{asset('images/core/a380.jpg')}} alt="Plane ready for takeoff" width="100%" style="opacity: 1.0; border-radius: 6px;">
    {{ Form::open(array('url' => '/user/login')) }}
        <input type="submit" value="Takeoff  /  Board" class="main-button">
    {{ Form::close() }}

    <p>Please enjoy the simulation! Good luck, the airline industry isn't easy.</p>
</body>

</html>