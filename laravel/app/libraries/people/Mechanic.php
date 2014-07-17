<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/12/14
 * Time: 11:06 AM
 */

namespace libraries\people;


class Mechanic extends Employee{

    private $experience;

    function __construct($age, $firstName, $company, $lastName, $salary, $experience)
    {
        $this->age = $age;
        $this->firstName = $firstName;
        $this->employer = $company;
        $this->lastName = $lastName;
        $this->salary = $salary;
        $this->experience = $experience;
    }
} 