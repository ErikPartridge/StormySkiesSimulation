<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/11/14
 * Time: 2:45 PM
 */


class Airline extends Eloquent{

    private $hubs;

    private $reputation;

    private $iata;

    private $icao;

    private $flightAttendantPay;

    private $mechanicPay;

    private $pilotPay;

    private $ceo;

    private $headquarters;

    private $countryId;

    private $earnings;

    private $costs;

    private $profits;

    private $worldId;

    function __construct()
    {
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
    public function setCountryId($countryId)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getCountryId()
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

    public function flights(){
        return $this->hasMany('Route');
    }

    public function hubs(){
        return $this->belongsToMany('Airport');
    }

    public function fleet(){
        return $this->hasMany('Airplane', 'owner');
    }

    public function country(){
        return $this->belongsTo('Country');
    }

    public function owner(){
        return $this->belongsTo('User', 'ceo');
    }

    public function bills(){
        return $this->hasMany('Bill');
    }

    public function deliveries(){
        return $this->hasMany('Delivery');
    }

    public function slots(){
        return $this->hasMany('Slot');
    }

    public function gates(){
        return $this->hasMany('Gate');
    }

} 