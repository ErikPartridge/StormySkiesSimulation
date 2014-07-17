<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/11/14
 * Time: 6:17 PM
 */

namespace libraries\demand;

use \League\Geotools\Coordinate as Coordinate;

class RouteDemand {


    public static function demand(Airport &$aptOne, Airport &$aptTwo){
        chdir("/root/java");

        $geoTools = new \League\Geotools\Geotools();
        $coordA = new Coordinate\Coordinate(array($aptOne->getLatitude(), $aptOne->getLongitude()));
        $coordB = new Coordinate\Coordinate(array($aptTwo->getLatitude(), $aptTwo->getLongitude()));
        $distance = $geoTools->distance()->setFrom($coordA)->setTo($coordB)->greatCircle();


        $input = "java -jar Forecast.jar ".$distance." ".$aptOne->getAllocatedDemand()." ".$aptTwo->getAllocatedDemand();
        exec($input, $var);

        return floatval($var);
    }
}