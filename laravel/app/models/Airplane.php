<?php
/**
 * (c) Erik Malmstrom-Partridge 2014
 */

class Airplane extends Eloquent{


    private $registration;

    private $type;

    private $engine;

    private $fin;

    private $age;

    private $aCheck;

    private $bCheck;

    private $cCheck;

    private $hours;

    private $location;

    private $cycles;

    private $owner;

    private $worldId;

    function __construct()
    {
    
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

    /**
     * @param mixed $aCheck
     */
    public function setACheck($aCheck)
    {
        $this->aCheck = $aCheck;
    }

    /**
     * @return mixed
     */
    public function getACheck()
    {
        return $this->aCheck;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $bCheck
     */
    public function setBCheck($bCheck)
    {
        $this->bCheck = $bCheck;
    }

    /**
     * @return mixed
     */
    public function getBCheck()
    {
        return $this->bCheck;
    }

    /**
     * @param mixed $cCheck
     */
    public function setCCheck($cCheck)
    {
        $this->cCheck = $cCheck;
    }

    /**
     * @return mixed
     */
    public function getCCheck()
    {
        return $this->cCheck;
    }

    /**
     * @param mixed $engine
     */
    public function setEngine($engine)
    {
        $this->engine = $engine;
    }

    /**
     * @return mixed
     */
    public function getEngine()
    {
        return $this->engine;
    }

    /**
     * @param mixed $cycles
     */
    public function setCycles($cycles)
    {
        $this->cycles = $cycles;
    }

    /**
     * @return mixed
     */
    public function getCycles()
    {
        return $this->cycles;
    }

    /**
     * @param mixed $fin
     */
    public function setFin($fin)
    {
        $this->fin = $fin;
    }

    /**
     * @return mixed
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * @param mixed $hours
     */
    public function setHours($hours)
    {
        $this->hours = $hours;
    }

    /**
     * @return mixed
     */
    public function getHours()
    {
        return $this->hours;
    }


    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $owner
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }

    /**
     * @return mixed
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param mixed $registration
     */
    public function setRegistration($registration)
    {
        $this->registration = $registration;
    }

    /**
     * @return mixed
     */
    public function getRegistration()
    {
        return $this->registration;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }


    public function isAirworthy(){
        $isAirworthy = true;
        return $isAirworthy;
    }

    public function theType(){
        return $this->belongsTo('AircraftType', 'type');
    }

    public function theOwner(){
        return $this->belongsTo('Airline', 'owner');
    }

    public function thisWorld(){
        return $this->belongsTo('World');
    }

    public function flights(){
        return $this->hasMany('Flight');
    }

    public function location(){
        return $this->belongsTo('Airport', 'location');
    }

    public function value($types){
        $t = null;
        foreach($types as $ty){
            if($ty->id == $this->id){
                $t = $ty;
            }
        }
        return $t->price * .75 * ((50000 - $this->cycles) /50000);
    }
}