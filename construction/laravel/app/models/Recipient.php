<?php


class Recipient extends Eloquent{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'mailing_list';

	private $first;

	private $last;

	private $email;

	function __construct(){
		
	}
}
