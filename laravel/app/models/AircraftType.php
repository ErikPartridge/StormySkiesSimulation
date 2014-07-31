<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/10/14
 * Time: 7:18 PM
 */


class AircraftType extends Eloquent{

    private $name;

    private $cruiseSpeed;

    private $minimumRunway;

    private $icao;

    private $range;

    private $price;

    private $numberOfEngines;

    private $maxSeats;

    private $productionRate;

    private $manufacturer;

    private $fuelburn;

    private $mtow;

    private $mlw;

    private $oew;

    private $mzfw;

    private $priceA;

    private $priceB;

    private $priceC;

    private $hoursA;

    private $hoursB;

    private $hoursC;

    function __construct()
    {
        
    }

    /**
     * @param mixed $cruiseSpeed
     */
    public function setCruiseSpeed($cruiseSpeed)
    {
        $this->cruiseSpeed = $cruiseSpeed;
    }

    /**
     * @return mixed
     */
    public function getCruiseSpeed()
    {
        return $this->cruiseSpeed;
    }

    /**
     * @param mixed $fuelburn
     */
    public function setFuelburn($fuelburn)
    {
        $this->fuelburn = $fuelburn;
    }

    /**
     * @return mixed
     */
    public function getFuelburn()
    {
        return $this->fuelburn;
    }

    /**
     * @param mixed $hoursA
     */
    public function setHoursA($hoursA)
    {
        $this->hoursA = $hoursA;
    }

    /**
     * @return mixed
     */
    public function getHoursA()
    {
        return $this->hoursA;
    }

    /**
     * @param mixed $hoursB
     */
    public function setHoursB($hoursB)
    {
        $this->hoursB = $hoursB;
    }

    /**
     * @return mixed
     */
    public function getHoursB()
    {
        return $this->hoursB;
    }

    /**
     * @param mixed $hoursC
     */
    public function setHoursC($hoursC)
    {
        $this->hoursC = $hoursC;
    }

    /**
     * @return mixed
     */
    public function getHoursC()
    {
        return $this->hoursC;
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
     * @param mixed $manufacturer
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }

    /**
     * @return mixed
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @param mixed $maxSeats
     */
    public function setMaxSeats($maxSeats)
    {
        $this->maxSeats = $maxSeats;
    }

    /**
     * @return mixed
     */
    public function getMaxSeats()
    {
        return $this->maxSeats;
    }

    /**
     * @param mixed $minimumRunway
     */
    public function setMinimumRunway($minimumRunway)
    {
        $this->minimumRunway = $minimumRunway;
    }

    /**
     * @return mixed
     */
    public function getMinimumRunway()
    {
        return $this->minimumRunway;
    }

    /**
     * @param mixed $mlw
     */
    public function setMlw($mlw)
    {
        $this->mlw = $mlw;
    }

    /**
     * @return mixed
     */
    public function getMlw()
    {
        return $this->mlw;
    }

    /**
     * @param mixed $mtow
     */
    public function setMtow($mtow)
    {
        $this->mtow = $mtow;
    }

    /**
     * @return mixed
     */
    public function getMtow()
    {
        return $this->mtow;
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
     * @param mixed $mzfw
     */
    public function setMzfw($mzfw)
    {
        $this->mzfw = $mzfw;
    }

    /**
     * @return mixed
     */
    public function getMzfw()
    {
        return $this->mzfw;
    }

    /**
     * @param mixed $numberOfEngines
     */
    public function setNumberOfEngines($numberOfEngines)
    {
        $this->numberOfEngines = $numberOfEngines;
    }

    /**
     * @return mixed
     */
    public function getNumberOfEngines()
    {
        return $this->numberOfEngines;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $oew
     */
    public function setOew($oew)
    {
        $this->oew = $oew;
    }

    /**
     * @return mixed
     */
    public function getOew()
    {
        return $this->oew;
    }

    /**
     * @param mixed $priceA
     */
    public function setPriceA($priceA)
    {
        $this->priceA = $priceA;
    }

    /**
     * @return mixed
     */
    public function getPriceA()
    {
        return $this->priceA;
    }

    /**
     * @param mixed $priceB
     */
    public function setPriceB($priceB)
    {
        $this->priceB = $priceB;
    }

    /**
     * @return mixed
     */
    public function getPriceB()
    {
        return $this->priceB;
    }

    /**
     * @param mixed $priceC
     */
    public function setPriceC($priceC)
    {
        $this->priceC = $priceC;
    }

    /**
     * @return mixed
     */
    public function getPriceC()
    {
        return $this->priceC;
    }

    /**
     * @param mixed $productionRate
     */
    public function setProductionRate($productionRate)
    {
        $this->productionRate = $productionRate;
    }

    /**
     * @return mixed
     */
    public function getProductionRate()
    {
        return $this->productionRate;
    }

    /**
     * @param mixed $range
     */
    public function setRange($range)
    {
        $this->range = $range;
    }

    /**
     * @return mixed
     */
    public function getRange()
    {
        return $this->range;
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

    public function airplanes(){
        return $this->hasMany('Airplane', 'type');
    }

    public function world(){
        return $this->belongsTo('World');
    }

    public function engineOptions(){
        return $this->belongsToMany('Engine', 'aircraft_type_engine');
    }
    

} 