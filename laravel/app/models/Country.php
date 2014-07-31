<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/12/14
 * Time: 11:22 AM
 */


class Country extends \Eloquent{

    private $name;

    private $iso;

    private $capital;

    private $euMember;

    private $openMarket;

    function __construct($capital, $euMember, $name, $iso, $openMarket)
    {
        $this->capital = $capital;
        $this->euMember = $euMember;
        $this->name = $name;
        $this->iso = $iso;
        $this->openMarket = $openMarket;
        $this->worldId = $worldId;
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

    public function world(){
        return $this->belongsTo('World');
    }

} 