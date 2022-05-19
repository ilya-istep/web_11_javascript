<?php 
	session_start();

	include("class/Login.php");

	if(isset($_POST['login']) && 
		isset($_POST['password'])){

		$user = [
			'login' => $_POST['login'],
			'password' => $_POST['password']
		];

		$authObj = new Login($user);

		if(is_array($authObj->errors) && count($authObj->errors) > 0){
			$jsonError = json_encode($authObj->errors);
			header("location: index.php?error=".$jsonError);
		}

	}
	
?>