<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/11/14
 * Time: 2:52 PM
 */

namespace libraries\airline;


class Flight {

    private $aircraft;

    private $departsGmt;

    private $arrivesGmt;

    private $cancelled;

    private $delayed;

    private $economy;

    private $ecoPlus;

    private $business;

    private $first;

    private $date;

    private $fuelBurn;

    private $flyingTime;

    private $route;

    function __construct($aircraft, $arrivesGmt, $cancelled, $business, $delayed, $date, $departsGmt, $ecoPlus, $economy, $first, $flyingTime, $fuelBurn, $route)
    {
        $this->aircraft = $aircraft;
        $this->arrivesGmt = $arrivesGmt;
        $this->cancelled = $cancelled;
        $this->business = $business;
        $this->delayed = $delayed;
        $this->date = $date;
        $this->departsGmt = $departsGmt;
        $this->ecoPlus = $ecoPlus;
        $this->economy = $economy;
        $this->first = $first;
        $this->flyingTime = $flyingTime;
        $this->fuelBurn = $fuelBurn;
        $this->route = $route;
    }

    /**
     * @param mixed $aircraft
     */
    public function setAircraft($aircraft)
    {
        $this->aircraft = $aircraft;
    }

    /**
     * @return mixed
     */
    public function getAircraft()
    {
        return $this->aircraft;
    }

    /**
     * @param mixed $business
     */
    public function setBusiness($business)
    {
        $this->business = $business;
    }

    /**
     * @return mixed
     */
    public function getBusiness()
    {
        return $this->business;
    }

    /**
     * @param mixed $arrivesGmt
     */
    public function setArrivesGmt($arrivesGmt)
    {
        $this->arrivesGmt = $arrivesGmt;
    }

    /**
     * @return mixed
     */
    public function getArrivesGmt()
    {
        return $this->arrivesGmt;
    }

    /**
     * @param mixed $cancelled
     */
    public function setCancelled($cancelled)
    {
        $this->cancelled = $cancelled;
    }

    /**
     * @return mixed
     */
    public function getCancelled()
    {
        return $this->cancelled;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $delayed
     */
    public function setDelayed($delayed)
    {
        $this->delayed = $delayed;
    }

    /**
     * @return mixed
     */
    public function getDelayed()
    {
        return $this->delayed;
    }

    /**
     * @param mixed $departsGmt
     */
    public function setDepartsGmt($departsGmt)
    {
        $this->departsGmt = $departsGmt;
    }

    /**
     * @return mixed
     */
    public function getDepartsGmt()
    {
        return $this->departsGmt;
    }

    /**
     * @param mixed $ecoPlus
     */
    public function setEcoPlus($ecoPlus)
    {
        $this->ecoPlus = $ecoPlus;
    }

    /**
     * @return mixed
     */
    public function getEcoPlus()
    {
        return $this->ecoPlus;
    }

    /**
     * @param mixed $first
     */
    public function setFirst($first)
    {
        $this->first = $first;
    }

    /**
     * @return mixed
     */
    public function getFirst()
    {
        return $this->first;
    }

    /**
     * @param mixed $economy
     */
    public function setEconomy($economy)
    {
        $this->economy = $economy;
    }

    /**
     * @return mixed
     */
    public function getEconomy()
    {
        return $this->economy;
    }

    /**
     * @param mixed $fuelBurn
     */
    public function setFuelBurn($fuelBurn)
    {
        $this->fuelBurn = $fuelBurn;
    }

    /**
     * @return mixed
     */
    public function getFuelBurn()
    {
        return $this->fuelBurn;
    }

    /**
     * @param mixed $flyingTime
     */
    public function setFlyingTime($flyingTime)
    {
        $this->flyingTime = $flyingTime;
    }

    /**
     * @return mixed
     */
    public function getFlyingTime()
    {
        return $this->flyingTime;
    }


    /**
     * @param mixed $route
     */
    public function setRoute($route)
    {
        $this->route = $route;
    }

    /**
     * @return mixed
     */
    public function getRoute()
    {
        return $this->route;
    }




} 