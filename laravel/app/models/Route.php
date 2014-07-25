<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/11/14
 * Time: 3:04 PM
 */

namespace libraries\airline;


class Route extends Eloquent{

    private $flightNumber;

    private $depart;

    private $arrive;

    private $aircraftType;

    private $airline;

    private $onTime;

    private $delayed;

    private $cancelled;

    private $bizPrice;

    private $firstPrice;

    private $ecoPrice;

    private $ePlusPrice;

    private $revenue;

    private $flightTime;

    private $departGmt;

    private $started;

    private $worldId;

    function __construct($worldId, $aircraftType, $airline, $arrive, $cancelled, $bizPrice, $departGmt, $delayed, $ePlusPrice, $depart, $firstPrice, $ecoPrice, $flightTime, $flightNumber, $onTime, $flights, $operates, $revenue, $started)
    {
        $this->worldId = $worldId;
        $this->aircraftType = $aircraftType;
        $this->airline = $airline;
        $this->arrive = $arrive;
        $this->cancelled = $cancelled;
        $this->bizPrice = $bizPrice;
        $this->departGmt = $departGmt;
        $this->delayed = $delayed;
        $this->ePlusPrice = $ePlusPrice;
        $this->depart = $depart;
        $this->firstPrice = $firstPrice;
        $this->ecoPrice = $ecoPrice;
        $this->flightTime = $flightTime;
        $this->flightNumber = $flightNumber;
        $this->onTime = $onTime;
        $this->flights = $flights;
        $this->operates = $operates;
        $this->revenue = $revenue;
        $this->started = $started;
    }

    /**
     * @param mixed $aircraftType
     */
    public function setAircraftType($aircraftType)
    {
        $this->aircraftType = $aircraftType;
    }

    /**
     * @return mixed
     */
    public function getAircraftType()
    {
        return $this->aircraftType;
    }

    /**
     * @param mixed $airline
     */
    public function setAirline($airline)
    {
        $this->airline = $airline;
    }

    /**
     * @return mixed
     */
    public function getAirline()
    {
        return $this->airline;
    }

    /**
     * @param mixed $arrives
     */
    public function setArrive($arrives)
    {
        $this->arrives = $arrives;
    }

    /**
     * @return mixed
     */
    public function getArrive()
    {
        return $this->arrives;
    }

    /**
     * @param mixed $bizPrice
     */
    public function setBizPrice($bizPrice)
    {
        $this->bizPrice = $bizPrice;
    }

    /**
     * @return mixed
     */
    public function getBizPrice()
    {
        return $this->bizPrice;
    }

    /**
     * @param mixed $cancelled
     */
    public function setCancelled($cancelled)
    {
        $this->cancelled = $cancelled;
    }

    /**
     * @return mixed
     */
    public function getCancelled()
    {
        return $this->cancelled;
    }

    /**
     * @param mixed $delayed
     */
    public function setDelayed($delayed)
    {
        $this->delayed = $delayed;
    }

    /**
     * @return mixed
     */
    public function getDelayed()
    {
        return $this->delayed;
    }

    /**
     * @param mixed $departGmt
     */
    public function setDepartGmt($departGmt)
    {
        $this->departGmt = $departGmt;
    }

    /**
     * @return mixed
     */
    public function getDepartGmt()
    {
        return $this->departGmt;
    }

    /**
     * @param mixed $departs
     */
    public function setDepart($departs)
    {
        $this->departs = $departs;
    }

    /**
     * @return mixed
     */
    public function getDepart()
    {
        return $this->departs;
    }

    /**
     * @param mixed $ePlusPrice
     */
    public function setEPlusPrice($ePlusPrice)
    {
        $this->ePlusPrice = $ePlusPrice;
    }

    /**
     * @return mixed
     */
    public function getEPlusPrice()
    {
        return $this->ePlusPrice;
    }

    /**
     * @param mixed $ecoPrice
     */
    public function setEcoPrice($ecoPrice)
    {
        $this->ecoPrice = $ecoPrice;
    }

    /**
     * @return mixed
     */
    public function getEcoPrice()
    {
        return $this->ecoPrice;
    }

    /**
     * @param mixed $firstPrice
     */
    public function setFirstPrice($firstPrice)
    {
        $this->firstPrice = $firstPrice;
    }

    /**
     * @return mixed
     */
    public function getFirstPrice()
    {
        return $this->firstPrice;
    }

    /**
     * @param mixed $flightNumber
     */
    public function setFlightNumber($flightNumber)
    {
        $this->flightNumber = $flightNumber;
    }

    /**
     * @return mixed
     */
    public function getFlightNumber()
    {
        return $this->flightNumber;
    }

    /**
     * @param mixed $flightTime
     */
    public function setFlightTime($flightTime)
    {
        $this->flightTime = $flightTime;
    }

    /**
     * @return mixed
     */
    public function getFlightTime()
    {
        return $this->flightTime;
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
     * @param mixed $onTime
     */
    public function setOnTime($onTime)
    {
        $this->onTime = $onTime;
    }

    /**
     * @return mixed
     */
    public function getOnTime()
    {
        return $this->onTime;
    }

    /**
     * @param mixed $operates
     */
    public function setOperates($operates)
    {
        $this->operates = $operates;
    }

    /**
     * @return mixed
     */
    public function getOperates()
    {
        return $this->operates;
    }

    /**
     * @param mixed $revenue
     */
    public function setRevenue($revenue)
    {
        $this->revenue = $revenue;
    }

    /**
     * @return mixed
     */
    public function getRevenue()
    {
        return $this->revenue;
    }

    /**
     * @param mixed $started
     */
    public function setStarted($started)
    {
        $this->started = $started;
    }

    /**
     * @return mixed
     */
    public function getStarted()
    {
        return $this->started;
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

    public function world(){
        return $this->belongsTo('World');
    }

    public function airline(){
        return $this->belongsTo('Airline', 'airline');
    }

    public function departs(){
        return $this->hasOne('Airport', 'depart');
    }

    public function arrives(){
        return $this->hasOne('Airport', 'arrive');
    }


} 