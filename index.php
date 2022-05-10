<?php	
	session_start();

	// print_r($_SESSION);
	// $_SESSION['my_session'] = "123";

	// session_destroy();

	if(isset($_GET['exit']) && $_GET['exit'] == true){
		unset($_SESSION['user']); // обнуляет только введенные данные из сессии, а не все сессии
		setcookie("userData", '', time() - 3600);
		unset($_COOKIE['userData']);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		if(isset($_GET['data']) && $_GET['data'] == 'error'){
			echo "неверные данные";
		}
	?>
	
	<?php
		if(isset($_SESSION['user']) || isset($_COOKIE['userData'])):?>
		
		<p>Вы вошли как
			<?php
				$user = (isset($_SESSION['user']))? json_decode($_SESSION['user']): json_decode($_COOKIE['userData']); // то же, что и под комментариями ниже
				
				// if(isset($_SESSION['user'])){
				// 	$user = json_decode($_SESSION['user']);
				// }
				// else{
				// 	$user = json_decode($_COOKIE['userData']);
				// }

				echo $user->login; // json_decode возвращает объект, а не массив, поэтому используем -> вместо =>
			?>
			<a href="index.php?exit=true">Exit</a>
		</p>

		<?php else: ?>
			<form action="page.php" method="POST">
				<input type="text" name="login" placeholder="login">
				<input type="password" name="password" placeholder="password">
				<label><input type="checkbox" name="saveUser" value="save">запомнить меня</label>
				<input type="submit" value="Sign In">
			</form>
		<?php endif; 
	?>

</body>
</html>