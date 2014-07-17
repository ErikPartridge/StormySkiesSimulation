<?php
/**
 * (c) Erik Malmstrom-Partridge 2014
 */

class Airplane {


    private $registration;

    private $type;

    private $engine;

    private $fin;

    private $age;

    private $leased;

    private $aCheck;

    private $bCheck;

    private $cCheck;

    private $hours;

    private $flights;

    private $location;

    private $cycles;

    private $owner;

    function __construct($aCheck, $age, $bCheck, $cCheck, $cycles, $engine, $fin, $flights, $hours, $leased, $location, $owner, $registration, $type)
    {
        $this->aCheck = $aCheck;
        $this->age = $age;
        $this->bCheck = $bCheck;
        $this->cCheck = $cCheck;
        $this->cycles = $cycles;
        $this->engine = $engine;
        $this->fin = $fin;
        $this->flights = $flights;
        $this->hours = $hours;
        $this->leased = $leased;
        $this->location = $location;
        $this->owner = $owner;
        $this->registration = $registration;
        $this->type = $type;
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
     * @param mixed $leased
     */
    public function setLeased($leased)
    {
        $this->leased = $leased;
    }

    /**
     * @return mixed
     */
    public function getLeased()
    {
        return $this->leased;
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
        if($cCheck >= $type->getMaintenanceProfile()->getHoursC()){
            $isAirworthy = false;
        }
        if($bCheck >= $type->getMaintenanceProfile()->getHoursB()){
            $isAirworthy = false;
        }
        if($aCheck >= $type->getMaintenanceProfile()->getHoursA()){
            $isAirworthy = false;
        }
        return $isAirworthy;
    }

}