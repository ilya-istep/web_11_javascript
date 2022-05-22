<?php 

include("class/SessionClass.php");
include("class/Validator.php");
include("class/DB.php");

class Login extends DB{

	private $valid = true;

	private $login = null;
	private $password = null;
	public $errors = [];

	function __construct($user){
			
		$validitionData = Validator::maxLengthValidator($user['login'], 10);

		if(!$validitionData['status']){		
			$this->valid = false;
			$this->errors[] = $validitionData['msg'];
		}

		$validitionData = Validator::minLengthValidator($user['login'], 2);

		if(!$validitionData['status']){
			$this->valid = false;
			$this->errors[] = $validitionData['msg'];
		}

		$validitionData = Validator::simbolValidator($user['password']);

		if(!$validitionData['status']){
			$this->valid = false;
			$this->errors[] = $validitionData['msg'];
		}

		if($this->valid){
			$this->login = $user['login'];
			$this->password = $user['password'];
		}

		$this->select(['login' => $this->login, 'password' => $this->password]);

		$auth = new SessionClass();
		$auth->saveSession($this->login);
		header("location: index.php");
	}
}

