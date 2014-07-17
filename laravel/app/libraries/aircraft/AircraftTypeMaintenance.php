<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/10/14
 * Time: 7:24 PM
 */

namespace libraries\aircraft;


class AircraftTypeMaintenance {


    private $priceA;

    private $priceB;

    private $priceC;

    private $hoursA;

    private $hoursB;

    private $hoursC;

    function __construct($hoursA, $priceC, $priceA, $priceB, $hoursB, $hoursC)
    {
        $this->hoursA = $hoursA;
        $this->priceC = $priceC;
        $this->priceA = $priceA;
        $this->priceB = $priceB;
        $this->hoursB = $hoursB;
        $this->hoursC = $hoursC;
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
}
