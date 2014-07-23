<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/11/14
 * Time: 2:45 PM
 */

namespace libraries\airline;

use \libraries\economics as economics;

class Airline extends Eloquent{

    private $hubs;

    private $fleet;

    private $flights;

    private $reputation;

    private $iata;

    private $icao;

    private $flightAttendantPay;

    private $mechanicPay;

    private $pilotPay;

    private $ceo;

    private $headquarters;

    private $country;

    private $earnings;

    private $costs;

    private $profits;

    private $worldId;

    function __construct($ceo, $costs, $country, $earnings, $flightAttendantPay, $fleet, $flights, $headquarters, $hubs, $iata, $icao, $mechanicPay, $pilotPay, $profits, $reputation, $worldId)
    {
        $this->ceo = $ceo;
        $this->costs = $costs;
        $this->country = $country;
        $this->earnings = $earnings;
        $this->flightAttendantPay = $flightAttendantPay;
        $this->fleet = $fleet;
        $this->flights = $flights;
        $this->headquarters = $headquarters;
        $this->hubs = $hubs;
        $this->iata = $iata;
        $this->icao = $icao;
        $this->mechanicPay = $mechanicPay;
        $this->pilotPay = $pilotPay;
        $this->profits = $profits;
        $this->reputation = $reputation;
        $this->worldId = $worldId;
    }

    /**
     * @param mixed $ceo
     */
    public function setCeo($ceo)
    {
        $this->ceo = $ceo;
    }

    /**
     * @return mixed
     */
    public function getCeo()
    {
        return $this->ceo;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $costs
     */
    public function setCosts($costs)
    {
        $this->costs = $costs;
    }

    /**
     * @return mixed
     */
    public function getCosts()
    {
        return $this->costs;
    }

    /**
     * @param mixed $flights
     */
    public function setFlights($flights)
    {
        $this->flights = $flights;
    }

    /**
     * @return mixed
     */
    public function getFlights()
    {
        return $this->flights;
    }

    /**
     * @param mixed $earnings
     */
    public function setEarnings($earnings)
    {
        $this->earnings = $earnings;
    }

    /**
     * @return mixed
     */
    public function getEarnings()
    {
        return $this->earnings;
    }

    /**
     * @param mixed $fleet
     */
    public function setFleet($fleet)
    {
        $this->fleet = $fleet;
    }

    /**
     * @return mixed
     */
    public function getFleet()
    {
        return $this->fleet;
    }

    /**
     * @param mixed $flightAttendantPay
     */
    public function setFlightAttendantPay($flightAttendantPay)
    {
        $this->flightAttendantPay = $flightAttendantPay;
    }

    /**
     * @return mixed
     */
    public function getFlightAttendantPay()
    {
        return $this->flightAttendantPay;
    }

    /**
     * @param mixed $headquarters
     */
    public function setHeadquarters($headquarters)
    {
        $this->headquarters = $headquarters;
    }

    /**
     * @return mixed
     */
    public function getHeadquarters()
    {
        return $this->headquarters;
    }

    /**
     * @param mixed $iata
     */
    public function setIata($iata)
    {
        $this->iata = $iata;
    }

    /**
     * @return mixed
     */
    public function getIata()
    {
        return $this->iata;
    }

    /**
     * @param mixed $hubs
     */
    public function setHubs($hubs)
    {
        $this->hubs = $hubs;
    }

    /**
     * @return mixed
     */
    public function getHubs()
    {
        return $this->hubs;
    }

    /**
     * @param mixed $icao
     */
    public function setIcao($icao)
    {
        $this->icao = $icao;
    }

    /**
     * @return mixed
     */
    public function getIcao()
    {
        return $this->icao;
    }

    /**
     * @param mixed $mechanicPay
     */
    public function setMechanicPay($mechanicPay)
    {
        $this->mechanicPay = $mechanicPay;
    }

    /**
     * @return mixed
     */
    public function getMechanicPay()
    {
        return $this->mechanicPay;
    }

    /**
     * @param mixed $pilotPay
     */
    public function setPilotPay($pilotPay)
    {
        $this->pilotPay = $pilotPay;
    }

    /**
     * @return mixed
     */
    public function getPilotPay()
    {
        return $this->pilotPay;
    }

    /**
     * @param mixed $profits
     */
    public function setProfits($profits)
    {
        $this->profits = $profits;
    }

    /**
     * @return mixed
     */
    public function getProfits()
    {
        return $this->profits;
    }

    /**
     * @param mixed $reputation
     */
    public function setReputation($reputation)
    {
        $this->reputation = $reputation;
    }

    /**
     * @return mixed
     */
    public function getReputation()
    {
        return $this->reputation;
    }


    public function hubs(){

        return $this->belongsToMany('\libraries\airports\Airport');
    }

    /**
     * @param mixed $worldId
     */
    public function setWorldId($worldId)
    {
        $this->worldId = $worldId;
    }

    /**
     * @return mixed
     */
    public function getWorldId()
    {
        return $this->worldId;
    }




} 