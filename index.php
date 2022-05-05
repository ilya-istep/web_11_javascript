<?php	
	$listNames = ['Алексей', 'Олег', 'Никита'];

		function renderListNames($names, $listNames){
		echo '<ul>';
		foreach($names as $key => $value) {
			$value = (integer)$value;
			echo "<li>".$listNames[$value]."</li>";
		}
		echo '</ul>';
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
	<!-- <form action="obr.php" method="GET">
		<input type="text" name="field_1">
		<button type="submit">Send</button>
	</form> -->
<?php
	$names = [];	
	if(isset($_POST['names']) && is_array($_POST['names']) && count($_POST['names']) > 0){
		$names = $_POST['names'];
		renderListNames($names, $listNames);
	}
?>

	<form action="index.php" method="POST">
		<!-- <input type="text" name="field_1">

		<input type="radio" name="r1" checked value="1">1 у radio всегда должен быть одинаковый name
		<input type="radio" name="r1" value="2">2
		
		<br>

		<input type="checkbox" name="c1" value="3">3 у чекбокса всегда должен быть разный name
		<input type="checkbox" name="c2" value="4">4 -->

		<select name="names[]" multiple>
			<?php
				foreach($listNames as $key => $value){
					if(in_array($key, $names)){
						echo '<option value="'.$key.'" selected>'.$value.'</option>';
					}
					else{
						echo '<option value="'.$key.'">'.$value.'</option>';
					}
				}
			?>
		</select>

		<button type="submit">Send</button>
	</form>

</body>
</html>