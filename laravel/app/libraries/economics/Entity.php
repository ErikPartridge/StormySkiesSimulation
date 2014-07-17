<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/11/14
 * Time: 7:53 PM
 */

namespace libraries\economics;


class Entity {

    protected  $funds;

    protected  $name;

    protected  $isPrivate;

    function __construct($funds, $isPrivate, $name)
    {
        $this->funds = $funds;
        $this->isPrivate = $isPrivate;
        $this->name = $name;
    }

    /**
     * @param mixed $funds
     */
    public function setFunds($funds)
    {
        $this->funds = $funds;
    }

    /**
     * @return mixed
     */
    public function getFunds()
    {
        return $this->funds;
    }

    /**
     * @param mixed $isPrivate
     */
    public function setIsPrivate($isPrivate)
    {
        $this->isPrivate = $isPrivate;
    }

    /**
     * @return mixed
     */
    public function getIsPrivate()
    {
        return $this->isPrivate;
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