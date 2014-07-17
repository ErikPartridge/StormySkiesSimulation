<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/12/14
 * Time: 11:06 AM
 */

namespace libraries\people;


class FlightAttendant extends Employee{

    private $seniority;

    private $typeRating;


    function __construct($age, $firstName, $company, $lastName, $salary, $seniority, $type)
    {
        $this->age = $age;
        $this->firstName = $firstName;
        $this->employer = $company;
        $this->lastName = $lastName;
        $this->salary = $salary;
        $this->seniority = $seniority;
        $this->typeRating = $type;
    }

    /**
     * @param mixed $seniority
     */
    public function setSeniority($seniority)
    {
        $this->seniority = $seniority;
    }

    /**
     * @return mixed
     */
    public function getSeniority()
    {
        return $this->seniority;
    }

    /**
     * @param mixed $typeRating
     */
    public function setTypeRating($typeRating)
    {
        $this->typeRating = $typeRating;
    }

    /**
     * @return mixed
     */
    public function getTypeRating()
    {
        return $this->typeRating;
    }



} 