<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/10/14
 * Time: 7:18 PM
 */

namespace libraries\aircraft;


class AircraftType {

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

    private $maintenanceProfile;

    private $fuelburn;

    private $mtow;

    private $mlw;

    private $oew;

    private $mzfw;

    function __construct($cruiseSpeed, $fuelburn, $icao, $maintenanceProfile, $manufacturer, $maxSeats, $minimumRunway, $mtow, $mlw, $mzfw, $name, $numberOfEngines, $oew, $price, $productionRate, $range)
    {
        $this->cruiseSpeed = $cruiseSpeed;
        $this->fuelburn = $fuelburn;
        $this->icao = $icao;
        $this->maintenanceProfile = $maintenanceProfile;
        $this->manufacturer = $manufacturer;
        $this->maxSeats = $maxSeats;
        $this->minimumRunway = $minimumRunway;
        $this->mtow = $mtow;
        $this->mlw = $mlw;
        $this->mzfw = $mzfw;
        $this->name = $name;
        $this->numberOfEngines = $numberOfEngines;
        $this->oew = $oew;
        $this->price = $price;
        $this->productionRate = $productionRate;
        $this->range = $range;
    }

    /**
     * @param int $cruiseSpeed
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
     * @param mixed $maintenanceProfile
     */
    public function setMaintenanceProfile($maintenanceProfile)
    {
        $this->maintenanceProfile = $maintenanceProfile;
    }

    /**
     * @return mixed
     */
    public function getMaintenanceProfile()
    {
        return $this->maintenanceProfile;
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


} 