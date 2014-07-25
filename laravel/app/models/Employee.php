<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/12/14
 * Time: 10:56 AM
 */



class Employee extends \Eloquent{

    protected  $salary;

    protected  $firstName;

    protected  $lastName;

    protected  $age;

    protected  $employer;

    protected  $type;

    function __construct($age, $firstName, $company, $lastName, $salary, $type)
    {
        $this->age = $age;
        $this->firstName = $firstName;
        $this->employer = $company;
        $this->lastName = $lastName;
        $this->salary = $salary;
        $this->type = $type;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param Company $company
     */
    public function setEmployer(Company $company)
    {
        $this->employer = $company;
    }

    /**
     * @return mixed
     */
    public function getEmployer()
    {
        return $this->employer;
    }

    public function getType(){
        return $this->type;
    }

    public function setType($type){
        $this->type = $type;
    }

    public function employer(){
        return $this->belongsTo('Airline', 'employer');
    }

    public function world(){
        return $this->belongsTo('World');
    }


} 