<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/12/14
 * Time: 11:02 AM
 */

namespace libraries\people;


class Executive extends Employee{

    function __construct($age, $firstName, $company, $lastName, $salary)
    {
        $this->age = $age;
        $this->firstName = $firstName;
        $this->employer = $company;
        $this->lastName = $lastName;
        $this->salary = $salary;
    }
} 