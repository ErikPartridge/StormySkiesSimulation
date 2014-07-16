<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/12/14
 * Time: 11:22 AM
 */

namespace libraries\world;


class Country {

    private $name;

    private $iso;

    private $capital;

    private $euMember;

    private $openMarket;

    private $banned;

    function __construct($banned, $capital, $euMember, $name, $iso, $openMarket)
    {
        $this->banned = $banned;
        $this->capital = $capital;
        $this->euMember = $euMember;
        $this->name = $name;
        $this->iso = $iso;
        $this->openMarket = $openMarket;
    }

    /**
     * @param mixed $banned
     */
    public function setBanned($banned)
    {
        $this->banned = $banned;
    }

    /**
     * @return mixed
     */
    public function getBanned()
    {
        return $this->banned;
    }

    /**
     * @param mixed $openMarket
     */
    public function setOpenMarket($openMarket)
    {
        $this->openMarket = $openMarket;
    }

    /**
     * @return mixed
     */
    public function getOpenMarket()
    {
        return $this->openMarket;
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
     * @param mixed $iso
     */
    public function setIso($iso)
    {
        $this->iso = $iso;
    }

    /**
     * @return mixed
     */
    public function getIso()
    {
        return $this->iso;
    }

    /**
     * @param mixed $euMember
     */
    public function setEuMember($euMember)
    {
        $this->euMember = $euMember;
    }

    /**
     * @return mixed
     */
    public function getEuMember()
    {
        return $this->euMember;
    }

    /**
     * @param mixed $capital
     */
    public function setCapital($capital)
    {
        $this->capital = $capital;
    }

    /**
     * @return mixed
     */
    public function getCapital()
    {
        return $this->capital;
    }



} 