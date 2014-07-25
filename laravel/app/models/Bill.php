<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/11/14
 * Time: 7:35 PM
 */


class Bill extends \Eloquent {

    private $description;

    private $amount;

    private $pays;

    private $when;

    private $worldId;


    function __construct($amount, $when, $description, $pays, $worldId)
    {
        $this->amount = $amount;
        $this->when = $when;
        $this->description = $description;
        $this->pays = $pays;
        $this->worldId = $worldId;
    }


    public function getWorldId(){
        return $this->worldId;
    }

    public function setWorldId($worldId){
        return $this->worldId = $worldId;
    }

    public function setPays($pays){
        $this->pays = $pays;
    }

    public function getPays(){
        return $this->pays;
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
     * @param mixed $when
     */
    public function setWhen($when)
    {
        $this->when = $when;
    }

    /**
     * @return mixed
     */
    public function getWhen()
    {
        return $this->when;
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

    public function pays(){
        return $this->belongsTo('Airline', 'pays');
    }

    public function to(){
        return $this->belongsTo('Airline', 'to');
    }

    public function world(){
        return $this->belongsTo('World');
    }

} 