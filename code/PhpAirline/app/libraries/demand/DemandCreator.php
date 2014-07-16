<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/11/14
 * Time: 3:43 PM
 */

namespace libraries\demand;

use \League\Geotools\Coordinate as Coordinate;

class DemandCreator {


    public static function allocateDemand(array &$inRegion, City $city){
        $scores = array();

        $sumOfScores = 0;

        foreach($inRegion as &$apt){
            $geoTools = new \League\Geotools\Geotools();
            $coordA = new Coordinate\Coordinate(array($city->getLatitude(), $city->getLongitude()));
            $coordB = new Coordinate\Coordinate(array($apt->getLatitude(), $apt->getLongitude()));
            $distance = $geoTools->distance()->setFrom($coordA)->setTo($coordB)->greatCircle();
            $distance = pow($distance, 2);
            $score = \libraries\database\AirportDatabase()->getNumFlights($apt) / $distance;
            $sumOfScores += $score;
            $scores[] = $score;
        }
        for($i = 0; $i < count($inRegion); $i++){
            $apt = $inRegion[$i];
            $add = ($scores[$i] / $sumOfScores) * $city->getPopulation() * 1.7 / 365.0;
            $apt->setAllocatedDemand($apt->getAllocatedDemand() + $add);
        }
    }
} 