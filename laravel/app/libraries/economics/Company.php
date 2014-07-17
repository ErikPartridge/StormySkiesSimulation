<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/11/14
 * Time: 7:37 PM
 */

namespace libraries\economics;


class Company extends Entity{


    private $holdings;

    private $corporateStock;

    private $numShares;

    private $isSubsidary;

    private $ceo;

    private $headquarters;

    private $country;

    private $earnings;

    private $costs;

    private $profits;

    private $dividend;

    function __construct($ceo, $costs, $corporateStock, $dividend, $country, $earnings, $funds, $headquarters, $holdings, $isPrivate, $isSubsidary, $name, $numShares, $profits)
    {
        $this->ceo = $ceo;
        $this->costs = $costs;
        $this->corporateStock = $corporateStock;
        $this->dividend = $dividend;
        $this->country = $country;
        $this->earnings = $earnings;
        $this->funds = $funds;
        $this->headquarters = $headquarters;
        $this->holdings = $holdings;
        $this->isPrivate = $isPrivate;
        $this->isSubsidary = $isSubsidary;
        $this->name = $name;
        $this->numShares = $numShares;
        $this->profits = $profits;
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
     * @param mixed $corporateStock
     */
    public function setCorporateStock($corporateStock)
    {
        $this->corporateStock = $corporateStock;
    }

    /**
     * @return mixed
     */
    public function getCorporateStock()
    {
        return $this->corporateStock;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $dividend
     */
    public function setDividend($dividend)
    {
        $this->dividend = $dividend;
    }

    /**
     * @return mixed
     */
    public function getDividend()
    {
        return $this->dividend;
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
     * @param mixed $holdings
     */
    public function setHoldings($holdings)
    {
        $this->holdings = $holdings;
    }

    /**
     * @return mixed
     */
    public function getHoldings()
    {
        return $this->holdings;
    }

    /**
     * @param mixed $isSubsidary
     */
    public function setIsSubsidary($isSubsidary)
    {
        $this->isSubsidary = $isSubsidary;
    }

    /**
     * @return mixed
     */
    public function getIsSubsidary()
    {
        return $this->isSubsidary;
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
     * @param mixed $numShares
     */
    public function setNumShares($numShares)
    {
        $this->numShares = $numShares;
    }

    /**
     * @return mixed
     */
    public function getNumShares()
    {
        return $this->numShares;
    }

} 