<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/12/14
 * Time: 10:36 AM
 */

class Engine extends \Eloquent {

    private $sfc;

    private $bph;

    private $name;

    private $manufacturer;

    private $worldId;

    function __construct($bph, $name, $manufacturer, $sfc, $worldId)
    {
        $this->bph = $bph;
        $this->name = $name;
        $this->manufacturer = $manufacturer;
        $this->sfc = $sfc;
        $this->worldId = $worldId;
    }

    /**
     * @param mixed $bph
     */
    public function setBph($bph)
    {
        $this->bph = $bph;
    }

    /**
     * @return mixed
     */
    public function getBph()
    {
        return $this->bph;
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
     * @param mixed $sfc
     */
    public function setSfc($sfc)
    {
        $this->sfc = $sfc;
    }

    /**
     * @return mixed
     */
    public function getSfc()
    {
        return $this->sfc;
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

    public function aircraftTypes(){
        return $this->belongsToMany('AircraftType', 'aircraft_type_engine');
    }


} 