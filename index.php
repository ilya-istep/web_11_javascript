<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Я файл на сервере</title>
</head>
<body>

	<?php
		if(!isset($_SESSION['auth'])):
	?>

	<form action="obr.php" method="POST">
		<input type="text" name="login" placeholder="login">
		<br>
		<input type="password" name="password"
		placeholder="пароль">
		<br>
		<input type="submit" value="войти">
	</form>

	<?php else: ?>
		Вы вошлина сайт. <a href="#">Выйти?</a>
	<?php endif; ?>

	<?php
		if(isset($_GET['error']) && !empty($_GET['error'])){
			$errors = json_decode($_GET['error']);

			if(is_array($errors) && count($errors) > 0){
				echo "<ul>";
				foreach ($errors as $key=>$value){
					echo "<li>$value</li>";
				}
				echo "</ul>";
			}
		}
	?>

</body>
</html>