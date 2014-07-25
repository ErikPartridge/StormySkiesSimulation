<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/11/14
 * Time: 3:16 PM
 */


class Airport extends Eloquent{

    private $name;

    private $latitude;

    private $longitude;

    private $icao;

    private $iata;

    private $elevation;

    private $maxFlightsPerHour;

    private $delayFactor;

    private $demandBonus;

    private $timeZone;

    private $runways;

    private $allocatedDemand;

    function __construct($allocatedDemand, $delayFactor, $demandBonus, $elevation, $icao, $iata, $latitude, $longitude, $maxFlightsPerHour, $name, $runways, $timeZone)
    {
        $this->allocatedDemand = $allocatedDemand;
        $this->delayFactor = $delayFactor;
        $this->demandBonus = $demandBonus;
        $this->elevation = $elevation;
        $this->icao = $icao;
        $this->iata = $iata;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->maxFlightsPerHour = $maxFlightsPerHour;
        $this->name = $name;
        $this->runways = $runways;
        $this->slotControlled = $slotControlled;
        $this->timeZone = $timeZone;
    }

    /**
     * @param mixed $slotControlled
     */
    public function setSlotControlled($slotControlled)
    {
        $this->slotControlled = $slotControlled;
    }

    /**
     * @return mixed
     */
    public function getSlotControlled()
    {
        return $this->slotControlled;
    }

    /**
     * @param mixed $slots
     */
    public function setSlots($slots)
    {
        $this->slots = $slots;
    }

    /**
     * @return mixed
     */
    public function getSlots()
    {
        return $this->slots;
    }



    /**
     * @param mixed $allocatedDemand
     */
    public function setAllocatedDemand($allocatedDemand)
    {
        $this->allocatedDemand = $allocatedDemand;
    }

    /**
     * @return mixed
     */
    public function getAllocatedDemand()
    {
        return $this->allocatedDemand;
    }
    /**
     * @param mixed $delayFactor
     */
    public function setDelayFactor($delayFactor)
    {
        $this->delayFactor = $delayFactor;
    }

    /**
     * @return mixed
     */
    public function getDelayFactor()
    {
        return $this->delayFactor;
    }

    /**
     * @param mixed $demandBonus
     */
    public function setDemandBonus($demandBonus)
    {
        $this->demandBonus = $demandBonus;
    }

    /**
     * @return mixed
     */
    public function getDemandBonus()
    {
        return $this->demandBonus;
    }

    /**
     * @param mixed $elevation
     */
    public function setElevation($elevation)
    {
        $this->elevation = $elevation;
    }

    /**
     * @return mixed
     */
    public function getElevation()
    {
        return $this->elevation;
    }

    /**
     * @param mixed $gates
     */
    public function setGates($gates)
    {
        $this->gates = $gates;
    }

    /**
     * @return mixed
     */
    public function getGates()
    {
        return $this->gates;
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
     * @param mixed $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $maxFlightsPerHour
     */
    public function setMaxFlightsPerHour($maxFlightsPerHour)
    {
        $this->maxFlightsPerHour = $maxFlightsPerHour;
    }

    /**
     * @return mixed
     */
    public function getMaxFlightsPerHour()
    {
        return $this->maxFlightsPerHour;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $runways
     */
    public function setRunways($runways)
    {
        $this->runways = $runways;
    }

    /**
     * @return mixed
     */
    public function getRunways()
    {
        return $this->runways;
    }

    /**
     * @param mixed $timeZone
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
    }

    /**
     * @return mixed
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    public function regions(){
        return $this->belongsToMany('Region');
    }

    public function world(){
        return $this->belongsTo('World');
    }

    public function country(){
        return $this->belongsTo('Country');
    }

    public function gates(){
        return $this->hasMany('Gate');
    }

    public function slots(){
        return $this->hasMany('Slot');
    }

    public function hubbed(){
        return $this->belongsToMany('Airline');
    }

    public function departures(){
        return $this->belongsToMany('Route', 'airport_depart');
    }

    public function arrivals(){
        return $this->belongsToMany('Route', 'airport_arrive');
    }

} 