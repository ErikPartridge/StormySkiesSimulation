<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/11/14
 * Time: 7:35 PM
 */

namespace libraries\economics;


class Bill {

    private $description;

    private $pays;

    private $to;

    private $frequency;

    private $amount;

    private $howLong;

    function __construct($amount, $description, $frequency, $howLong, $pays, $to)
    {
        $this->amount = $amount;
        $this->description = $description;
        $this->frequency = $frequency;
        $this->howLong = $howLong;
        $this->pays = $pays;
        $this->to = $to;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $howLong
     */
    public function setHowLong($howLong)
    {
        $this->howLong = $howLong;
    }

    /**
     * @return mixed
     */
    public function getHowLong()
    {
        return $this->howLong;
    }

    /**
     * @param mixed $to
     */
    public function setTo($to)
    {
        $this->to = $to;
    }

    /**
     * @return mixed
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param mixed $pays
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    }

    /**
     * @return mixed
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * @param mixed $frequency
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;
    }

    /**
     * @return mixed
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }


} 