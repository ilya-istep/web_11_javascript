<?php
	$listNames = ['Алексей', 'Олег', 'Никита'];

	if(isset($_POST['names']) && is_array($_POST['names']) && count($_POST['names']) > 0){
		$names = $_POST['names'];
		renderListNames($names, $listNames);
	}

	function renderListNames($names, $listNames){
		echo '<ul>';
		foreach($names as $key => $value) {
			$value = (integer)$value;
			echo "<li>".$listNames[$value]."</li>";
		}
		echo '</ul>';
	}

?>

