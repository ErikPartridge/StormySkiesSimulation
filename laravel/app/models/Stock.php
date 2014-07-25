<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/11/14
 * Time: 7:45 PM
 */

namespace libraries\economics;


class Stock {

    private $company;

    private $holder;

    private $shares;

    private $currentPrice;

    function __construct($company, $currentPrice, $holder, $shares)
    {
        $this->company = $company;
        $this->currentPrice = $currentPrice;
        $this->holder = $holder;
        $this->shares = $shares;
    }


    public function calculatePrice(){
        $value = ($company->getProfits() - ($company->getDividend() * $company->getNumShares())) / $company->getNumShares();
        $currentPrice = $value;
    }

    /**
     * @param mixed $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param mixed $currentPrice
     */
    public function setCurrentPrice($currentPrice)
    {
        $this->currentPrice = $currentPrice;
    }

    /**
     * @return mixed
     */
    public function getCurrentPrice()
    {
        return $this->currentPrice;
    }

    /**
     * @param mixed $holder
     */
    public function setHolder($holder)
    {
        $this->holder = $holder;
    }

    /**
     * @return mixed
     */
    public function getHolder()
    {
        return $this->holder;
    }

    /**
     * @param mixed $shares
     */
    public function setShares($shares)
    {
        $this->shares = $shares;
    }

    /**
     * @return mixed
     */
    public function getShares()
    {
        return $this->shares;
    }



} 