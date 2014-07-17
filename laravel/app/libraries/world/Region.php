<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/12/14
 * Time: 11:25 AM
 */

namespace libraries\world;


class Region {

    private $name;

    private $airportsInRegion;

    private $cities;

    function __construct($airportsInRegion, $name, $cities)
    {
        $this->airportsInRegion = $airportsInRegion;
        $this->name = $name;
        $this->cities = $cities;
    }

    /**
     * @param mixed $airportsInRegion
     */
    public function setAirportsInRegion($airportsInRegion)
    {
        $this->airportsInRegion = $airportsInRegion;
    }

    /**
     * @return mixed
     */
    public function getAirportsInRegion()
    {
        return $this->airportsInRegion;
    }

    /**
     * @param mixed $cities
     */
    public function setCities($cities)
    {
        $this->cities = $cities;
    }

    /**
     * @return mixed
     */
    public function getCities()
    {
        return $this->cities;
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

} 