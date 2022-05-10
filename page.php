<?php	
	session_start();
	// print_r($_SESSION);

	if(isset($_POST['login']) && isset($_POST['password'])){
		$user = [
					'login' => $_POST['login'],
					'password' => $_POST['password'],
				];

		if(searchUser($user)){
			
			$user['password'] = md5($user['password']);
			$_SESSION['user'] = json_encode($user);
			
			if(isset($_POST['saveUser']) && $_POST['saveUser'] == "save"){
				setcookie('userData', json_encode($user), time() + 3600);
				print_r($_COOKIE); 
			}
			
			// print_r($_SESSION['user']);
			header("location: index.php");
		}
		else{
			header("location: index.php?data=error"); //редиррект
		}
	}

	// $user = ['login' => '', 'password' => ''] в каком виде должны приходить параметры в функцию
	// return [true / false] что вернет данная функция
	function searchUser($user){
		$users = [
			[
				'login' => 'Oleg',
				'password' => '123'
			],
			[
				'login' => 'Roman',
				'password' => '321'
			]
		];

		foreach($users as $value){
			if($value['login'] == $user['login'] &&
			   $value['password'] == $user['password']
			){
				return true;
				break;
			}
		}

		return false;
	}
?>

