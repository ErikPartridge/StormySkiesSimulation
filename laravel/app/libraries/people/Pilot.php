<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/12/14
 * Time: 11:13 AM
 */

namespace libraries\people;


class Pilot extends Employee{

    private $typeCertification;

    private $seniority;

    function __construct($age, $firstName, $company, $lastName, $salary, $typeCert, $seniority)
    {
        $this->age = $age;
        $this->firstName = $firstName;
        $this->employer = $company;
        $this->lastName = $lastName;
        $this->salary = $salary;
        $this->typeCertification = $typeCert;
        $this->seniority = $seniority;
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
     * @param mixed $typeCertification
     */
    public function setTypeCertification($typeCertification)
    {
        $this->typeCertification = $typeCertification;
    }

    /**
     * @return mixed
     */
    public function getTypeCertification()
    {
        return $this->typeCertification;
    }

} 