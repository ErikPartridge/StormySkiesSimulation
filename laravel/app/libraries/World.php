<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/23/14
 * Time: 3:22 PM
 */

namespace libraries;


class World extends Eloquent{

    private $name;

    private $cap;

    private $numberUsers;

    function __construct($cap, $name, $numberUsers)
    {
        $this->cap = $cap;
        $this->name = $name;
        $this->numberUsers = $numberUsers;
    }

    /**
     * @param mixed $cap
     */
    public function setCap($cap)
    {
        $this->cap = $cap;
    }

    /**
     * @return mixed
     */
    public function getCap()
    {
        return $this->cap;
    }

    /**
     * @param mixed $numberUsers
     */
    public function setNumberUsers($numberUsers)
    {
        $this->numberUsers = $numberUsers;
    }

    /**
     * @return mixed
     */
    public function getNumberUsers()
    {
        return $this->numberUsers;
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
