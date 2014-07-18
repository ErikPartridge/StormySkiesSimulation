<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/11/14
 * Time: 2:45 PM
 */

namespace libraries\airline;

use \libraries\economics as economics;

class Airline extends economics\Company{

    private $hubs;

    private $fleet;

    private $flights;

    private $reputation;

    private $iata;

    private $icao;

    private $onOrder;

    private $flightAttendantPay;

    private $mechanicPay;

    private $pilotPay;

    private $flightAttendants;

    private $pilots;

    private $mechanics;

    private $executive;

    function __construct($executive, $fleet, $flightAttendantPay, $flightAttendants, $flights, $iata, $hubs, $icao, $mechanicPay, $mechanics, $onOrder, $pilotPay, $pilots, $reputation)
    {
        $this->executive = $executive;
        $this->fleet = $fleet;
        $this->flightAttendantPay = $flightAttendantPay;
        $this->flightAttendants = $flightAttendants;
        $this->flights = $flights;
        $this->iata = $iata;
        $this->hubs = $hubs;
        $this->icao = $icao;
        $this->mechanicPay = $mechanicPay;
        $this->mechanics = $mechanics;
        $this->onOrder = $onOrder;
        $this->pilotPay = $pilotPay;
        $this->pilots = $pilots;
        $this->reputation = $reputation;
    }

    /**
     * @param mixed $executive
     */
    public function setExecutive($executive)
    {
        $this->executive = $executive;
    }

    /**
     * @return mixed
     */
    public function getExecutive()
    {
        return $this->executive;
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
     * @param mixed $flightAttendants
     */
    public function setFlightAttendants($flightAttendants)
    {
        $this->flightAttendants = $flightAttendants;
    }

    /**
     * @return mixed
     */
    public function getFlightAttendants()
    {
        return $this->flightAttendants;
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
     * @param mixed $mechanics
     */
    public function setMechanics($mechanics)
    {
        $this->mechanics = $mechanics;
    }

    /**
     * @return mixed
     */
    public function getMechanics()
    {
        return $this->mechanics;
    }

    /**
     * @param mixed $onOrder
     */
    public function setOnOrder($onOrder)
    {
        $this->onOrder = $onOrder;
    }

    /**
     * @return mixed
     */
    public function getOnOrder()
    {
        return $this->onOrder;
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
     * @param mixed $pilots
     */
    public function setPilots($pilots)
    {
        $this->pilots = $pilots;
    }

    /**
     * @return mixed
     */
    public function getPilots()
    {
        return $this->pilots;
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


} 