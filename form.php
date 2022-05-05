<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		if(isset($_GET['data']) && !empty($_GET['data'])){
			$data = json_decode($_GET['data']);
			echo "<p>".$data->data."</p>";
		}

	?>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
    	<input type="file" name="my_file">
    	<button type="submit">Send</button>
    </form>

</body>
</html>