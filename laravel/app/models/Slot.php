<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/11/14
 * Time: 3:33 PM
 */


class Slot extends Eloquent {

    private $time;

    private $owner;

    private $airport;

    private $worldId;

    function __construct()
    {

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
     * @param mixed $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $worldId
     */
    public function setWorldId($worldId)
    {
        $this->worldId = $worldId;
    }

    /**
     * @return mixed
     */
    public function getWorldId()
    {
        return $this->worldId;
    }

    public function owner(){
        return $this->belongsTo('Airline', 'owner');
    }

    public function airport(){
        return $this->belongsTo('Airport', 'airport');
    }

    public function world(){
        return $this->belongsTo('World');
    }



} 