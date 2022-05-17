<?php 

include("Session.php");
include("Validator.php");

class Login{

	private $valid = true;

	private $login = null;
	private $password = null;
	public $errors =[];

	function __construct($user){
			
		$validitionData = Validator::maxLengthValidator($user['login'], 5);

		if(!$validitionData['status']){
			$this->valid = false;
			$this->errors[] = $validitionData['msg'];
		}

		$validitionData = Validator::minLengthValidator($user['login'], 2);

		if(!$validitionData['status']){
			$this->valid = false;
			$this->errors[] = $validitionData['msg'];
		}

		if($this->valid){
			$this->login = $user['login'];
			$this->password = $user['password'];
		}
		else{

		}
		
		//parent::__construct();
	}
}

