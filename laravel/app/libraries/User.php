<?php
/**
 * Created by PhpStorm.
 * User: Erik
 * Date: 7/23/14
 * Time: 3:17 PM
 */

namespace libraries;


class User extends Eloquent{

    private $username;

    private $firstName;

    private $lastName;

    private $email;

    private $location;

    private $birthday;

    private $credits;

    private $active;

    private $password;

    private $passwordTemp;

    function __construct($active, $birthday, $email, $credits, $lastName, $firstName, $password, $passwordTemp, $username, $location)
    {
        $this->active = $active;
        $this->birthday = $birthday;
        $this->email = $email;
        $this->credits = $credits;
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->password = $password;
        $this->passwordTemp = $passwordTemp;
        $this->username = $username;
        $this->location = $location;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
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
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $passwordTemp
     */
    public function setPasswordTemp($passwordTemp)
    {
        $this->passwordTemp = $passwordTemp;
    }

    /**
     * @return mixed
     */
    public function getPasswordTemp()
    {
        return $this->passwordTemp;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
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
     * @param mixed $credits
     */
    public function setCredits($credits)
    {
        $this->credits = $credits;
    }

    /**
     * @return mixed
     */
    public function getCredits()
    {
        return $this->credits;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->active;
    }




} 