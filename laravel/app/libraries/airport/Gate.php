<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/11/14
 * Time: 3:33 PM
 */

namespace libraries\airport;


class Gate {


    private $airport;

    private $owner;

    private $number;

    private $worldId;

    function __construct($number, $airport, $owner, $worldId)
    {
        $this->number = $number;
        $this->airport = $airport;
        $this->owner = $owner;
        $this->worldId = $worldId;
    }

    /**
     * @param mixed $airport
     */
    public function setAirport($airport)
    {
        $this->airport = $airport;
    }

    /**
     * @return mixed
     */
    public function getAirport()
    {
        return $this->airport;
    }

    /**
     * @param mixed $owner
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }

    /**
     * @return mixed
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

} 