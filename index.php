<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="obr.php" method="POST">
		<input type="text" name="login" placeholder="login">
		<br>
		<input type="password" name="password"
		placeholder="пароль">
		<br>
		<input type="submit" value="войти">
	</form>

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