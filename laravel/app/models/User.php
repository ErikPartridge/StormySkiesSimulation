<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Laravel\Cashier\BillableInterface;
use Laravel\Cashier\BillableTrait;

class User extends Eloquent implements UserInterface, RemindableInterface, BillableInterface {

	use UserTrait, RemindableTrait;

	use BillableTrait;
    
    protected $dates = ['trial_ends_at', 'subscription_ends_at'];
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	private $username;

	private $firstName;

	private $lastName;

	private $email;

	private $location;

	private $birthday;

	private $password;

	private $passwordTemp;

	private $active;

	private $admin;

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

    public function getAdmin(){
    	return $this->admin;
    }

    public function setAdmin($admin){
    	$this->admin = $admin;
    }

    public function airlines(){
        return $this->hasMany('airlines', 'ceo');
    }

}
