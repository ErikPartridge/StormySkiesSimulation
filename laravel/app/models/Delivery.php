<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/11/14
 * Time: 8:18 PM
 */


class Delivery extends \Eloquent {

    private $type;

    private $airline;

    private $manufacturer;

    private $when;

    private $worldId;

    function __construct($airline, $manufacturer, $type, $when, $worldId)
    {
        $this->airline = $airline;
        $this->manufacturer = $manufacturer;
        $this->type = $type;
        $this->when = $when;
        $this->worldId = $worldId;
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

    /**
     * @param mixed $when
     */
    public function setWhen($when)
    {
        $this->when = $when;
    }

    /**
     * @return mixed
     */
    public function getWhen()
    {
        return $this->when;
    }

    public function world(){
        return $this->belongsTo('World');
    }

    public function airline(){
        return $this->belongsTo('Airline');
    }



} 