<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/11/14
 * Time: 3:33 PM
 */


class Gate extends \Eloquent {


    private $airport;

    private $owner;

    private $number;

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

    public function world(){
        return $this->belongsTo('World');
    }

    public function owner(){
        return $this->belongsTo('Airline', 'owner');
    }

    public function airport(){
        return $this->belongsTo('Airport', 'airport');
    }

} 